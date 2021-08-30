<?php

namespace WabLab\Tests\Classes;

use WabLab\HtmlBuilder\Contract\IRenderingContext;
use WabLab\HtmlBuilder\HTML\Renderer\AbstractRenderer;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;

class Blank2TagRenderer extends AbstractRenderer
{

    private Blank2Tag $blankTag;

    public function __construct(RendererMapper $rendererMapper, Blank2Tag $blankTag, int $indentation = 0)
    {
        parent::__construct($rendererMapper, $indentation);
        $this->blankTag = $blankTag;
    }

    public function render(TestRenderingContext|IRenderingContext $context = null): string
    {
        if($context) $context->setContextInput('test context input');
        return 'blank';
    }
}