<?php

namespace WabLab\Tests\Classes;

use WabLab\HtmlBuilder\Contract\IRenderingContext;
use WabLab\HtmlBuilder\HTML\Comment;
use WabLab\HtmlBuilder\HTML\Renderer\AbstractRenderer;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;

class Blank2TagRenderer extends AbstractRenderer
{

    public function __construct(RendererMapper $rendererMapper, Blank2TagClass $blankTag, int $indentation = 0, $maxLineWords = 0)
    {

    }

    public function render(TestRenderingContext|IRenderingContext $context = null): string
    {
        $context->setContextInput('test context input');
        return 'blank';
    }
}