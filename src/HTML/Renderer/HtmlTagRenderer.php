<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;

use WabLab\HtmlBuilder\Contract\IRenderingContext;
use WabLab\HtmlBuilder\Helper\RenderingHelper;
use WabLab\HtmlBuilder\HTML\Tag\AbstractTag;
use WabLab\HtmlBuilder\HTML\Tag\AbstractContainerTag;

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
    public function render(?IRenderingContext $context = null):string
    {
        return $this->renderHtmlOpenTag() .
            $this->renderFormattedInnerText($context) .
            $this->renderHtmlCloseTag();
    }

    //
    // LEVEL 1
    //
    protected function renderHtmlOpenTag()
    {
        return $this->indent($this->indentation, "<{$this->htmlComponent->getTagName()}{$this->renderAttributes()}");
    }

    protected function renderFormattedInnerText(?IRenderingContext $context = null)
    {
        $formattedInnerText = $this->renderInnerText($context);
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

    protected function renderInnerText(?IRenderingContext $context = null)
    {
        return ($this->htmlComponent->getInnerText() ? $this->indent($this->indentation + 1,  $this->htmlComponent->getInnerText()) . "\n" : '') .
            $this->renderComponentChildren($context);
    }


    //
    // LEVEL 3
    //
    protected function renderComponentChildren(?IRenderingContext $context = null)
    {
        $childrenHtml = '';
        if ($this->htmlComponent instanceof AbstractContainerTag) {
            $childrenHtml .= RenderingHelper::renderElements($this->htmlComponent->getChildren(), $this->rendererMapper, $this->indentation+1, $context);
        }
        return $childrenHtml;
    }

}