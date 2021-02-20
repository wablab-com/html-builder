<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Renderer;

use WabLab\HTMLTemplateBuilder\Contract\IRenderer;

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