<?php

namespace WabLab\Tests\Unit;

use WabLab\HtmlBuilder\HTML\FreeText;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Tag\Div;
use WabLab\Tests\AbstractTestCase;

class HtmlFreeTextTest extends AbstractTestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFreetextGettersAndSetters() {
        $freeText = FreeText::create()->setInnerText('test text');
        $this->assertEquals('test text', $freeText->getInnerText());
    }


    public function testNestedFreeTextRenderer()
    {
        $div = Div::create()->addChild(
            FreeText::create()->setInnerText('test text')
        );
        $divRenderer = new HtmlTagRenderer($this->rendererMapper, $div);
        $this->assertStringContainsString('test text', $divRenderer->render());
    }

}
