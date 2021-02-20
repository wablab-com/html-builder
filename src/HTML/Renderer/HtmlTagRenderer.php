<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Renderer;

use PHPUnit\Util\Exception;
use WabLab\HTMLTemplateBuilder\Contract\IRenderableElement;
use WabLab\HTMLTemplateBuilder\Contract\IRenderer;
use WabLab\HTMLTemplateBuilder\HTML\Tag\AbstractTag;
use WabLab\HTMLTemplateBuilder\HTML\Tag\AbstractContainerTag;

class HtmlTagRenderer extends AbstractRenderer
{
    /**
     * @var bool
     */
    private bool $invalidInnerText = false;
    /**
     * @var AbstractTag
     */
    private AbstractTag $htmlComponent;

    public function __construct(RendererMapper $rendererMapper, AbstractTag $htmlComponent, int $indentation = 0)
    {
        parent::__construct($rendererMapper, $indentation);
        $this->htmlComponent = $htmlComponent;
    }

    //
    // LEVEL 0
    //
    public function render(): string
    {
        return $this->renderHtmlOpenTag() .
            $this->renderFormattedInnerText() .
            $this->renderHtmlCloseTag();
    }

    //
    // LEVEL 1
    //
    protected function renderHtmlOpenTag()
    {
        return $this->indent($this->indentation, "<{$this->htmlComponent->getTagName()}{$this->renderAttributes()}");
    }

    protected function renderFormattedInnerText()
    {
        $formattedInnerText = $this->renderInnerText();
        if ($formattedInnerText) {
            $this->invalidInnerText = false;
            return ">\n" . $formattedInnerText;
        }
        $this->invalidInnerText = true;
        return '';
    }

    protected function renderHtmlCloseTag()
    {
        if ($this->invalidInnerText) {
            if ($this->htmlComponent->isShortCloseAllowed()) {
                return ' />';
            }
            return "></{$this->htmlComponent->getTagName()}>";
        }
        return $this->indent($this->indentation, "</{$this->htmlComponent->getTagName()}>");
    }


    //
    // LEVEL 2
    //
    protected function renderAttributes()
    {
        $formattedAttributes = '';
        foreach ($this->htmlComponent->getAttributes() as $attributeName => $attributeValue) {
            $formattedAttributes .= " {$attributeName}=\"{$attributeValue}\"";
        }
        return $formattedAttributes;
    }

    protected function renderInnerText()
    {
        return ($this->htmlComponent->getInnerText() ? $this->indent($this->indentation + 1,  $this->htmlComponent->getInnerText()) . "\n" : '') .
            $this->renderComponentChildren();
    }


    //
    // LEVEL 3
    //
    protected function renderComponentChildren()
    {
        $childrenHtml = '';
        if ($this->htmlComponent instanceof AbstractContainerTag) {
            foreach ($this->htmlComponent->getChildren() as $child) {
                if($child instanceof IRenderableElement) {
                    $childRenderer = $this->createChildRenderer($child);
                    if($childRenderer) {
                        $childrenHtml .= $childRenderer->render() . "\n";
                    }
                }
            }
        }
        return $childrenHtml;
    }


    //
    // LEVEL 4
    //
    protected function createChildRenderer(IRenderableElement $child): IRenderer
    {
        $rendererClass = $this->rendererMapper->mapRenderableElement($child);
        if($rendererClass) {
            return new $rendererClass($this->rendererMapper, $child, $this->indentation + 1);
        }
        throw new \Exception('No registered renderer for type "'.get_class($child).'"');
    }

}