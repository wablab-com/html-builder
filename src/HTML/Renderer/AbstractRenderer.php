<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;

use WabLab\HtmlBuilder\Contract\IRenderableElement;
use WabLab\HtmlBuilder\Contract\IRenderer;
use WabLab\HtmlBuilder\Contract\IRenderingContext;
use WabLab\HtmlBuilder\HTML\Tag\AbstractContainerTag;

abstract class AbstractRenderer implements IRenderer
{
    /**
     * @var int
     */
    protected int $indentation;

    /**
     * @var RendererMapper
     */
    protected RendererMapper $rendererMapper;

    public function __construct(RendererMapper $rendererMapper, int $indentation = 0)
    {
        $this->indentation = $indentation;
        $this->rendererMapper = $rendererMapper;
    }

    protected function indent(int $indent = 0, $code = '')
    {
        $indentation = str_pad('', ($indent * 4), ' ');
        return $indentation . str_replace("\n", "\n" . $indentation, $code);
    }

}