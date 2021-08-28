<?php

namespace WabLab\Tests\Integration;

use WabLab\HtmlBuilder\Helper\RenderingHelper;
use WabLab\HtmlBuilder\HTML\FreeText;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Tag\Div;
use WabLab\Tests\AbstractTestCase;
use WabLab\Tests\Classes\Blank2TagClass;
use WabLab\Tests\Classes\BlankTagClass;
use WabLab\Tests\Classes\Blank2TagRenderer;
use WabLab\Tests\Classes\TestRenderingContext;

class RenderingContextTest extends AbstractTestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->rendererMapper->register(Blank2TagClass::class, Blank2TagRenderer::class);
    }

    public function testRenderingContext() {
        $tag = Blank2TagClass::create()->setInnerText('inner text');
        $context = new TestRenderingContext();
        $this->assertEquals('', $context->getContextInput());
        RenderingHelper::renderElements([$tag], $this->rendererMapper, 0, $context);
        $this->assertEquals('test context input', $context->getContextInput());
    }

}
