<?php

namespace WabLab\HtmlBuilder\Helper;

use WabLab\HtmlBuilder\Contract\IRenderableElement;
use WabLab\HtmlBuilder\Contract\IRenderer;
use WabLab\HtmlBuilder\Contract\IRenderingContext;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;

abstract class RenderingHelper implements IRenderer
{

    public static function renderElements(array $elements, RendererMapper $rendererMapper, $indentation = 0, ?IRenderingContext $context = null)
    {
        $outputHtml = '';
        foreach ($elements as $element) {
            if($element instanceof IRenderableElement) {
                $elementRenderer = static::createElementRenderer($rendererMapper, $element, $indentation);
                if($elementRenderer) {
                    $outputHtml .= $elementRenderer->render($context) . "\n";
                }
            }
        }
        return $outputHtml;
    }


    protected static function createElementRenderer(RendererMapper $rendererMapper, IRenderableElement $element, $indentation = 0): IRenderer
    {
        $rendererClass = $rendererMapper->mapRenderableElement($element);
        if($rendererClass) {
            return new $rendererClass($rendererMapper, $element, $indentation);
        }
        throw new \Exception('No registered renderer for type "'.get_class($element).'"');
    }

}