<?php

namespace WabLab\Tests\Integration;

use WabLab\HtmlBuilder\Helper\RenderingHelper;
use WabLab\Tests\AbstractTestCase;
use WabLab\Tests\Classes\Blank2Tag;
use WabLab\Tests\Classes\Blank2TagRenderer;
use WabLab\Tests\Classes\TestRenderingContext;

class RenderingContextTest extends AbstractTestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->rendererMapper->register(Blank2Tag::class, Blank2TagRenderer::class);
    }

    public function testRenderingContext() {
        $tag = Blank2Tag::create()->setInnerText('inner text');
        $context = new TestRenderingContext();
        $this->assertEquals('', $context->getContextInput());
        RenderingHelper::renderElements([$tag], $this->rendererMapper, 0, $context);
        $this->assertEquals('test context input', $context->getContextInput());
    }

}
