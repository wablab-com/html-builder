<?php

namespace WabLab\Tests\Unit;

use WabLab\HtmlBuilder\HTML\Comment;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Tag\A;
use WabLab\HtmlBuilder\HTML\Tag\Div;
use WabLab\HtmlBuilder\HTML\Tag\Span;
use WabLab\Tests\AbstractTestCase;

class CommonRendererTest extends AbstractTestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNestedTagRendering() {
        $div = $this->getNestedHtmlTag();

        $renderer = new HtmlTagRenderer($this->rendererMapper, $div);
        $renderedTag = $renderer->render();
        $this->assertStringContainsString('<span', $renderedTag);
    }

    public function testUnregisteredNestedMapper() {
        $div = $this->getNestedHtmlTag();
        $div->addChild(Comment::create()->setInnerText('test comment'));
        $this->rendererMapper->unRegister(Comment::class);
        try {
            $renderer = new HtmlTagRenderer($this->rendererMapper, $div);
            $renderer->render();
            $this->assertTrue(false);
        } catch (\Throwable $exception) {
            $this->assertStringContainsString('No registered renderer for type', $exception->getMessage());
        }

    }


    /**
     * @return Div
     */
    private function getNestedHtmlTag() {
        return Div::create()->addChild(
                Span::create()->addChild(
                    A::create()->setTarget('_blank')
                )->setClass("m-4 p-5")
                    ->setId('new span id')
                    ->setInnerText('looooooooooooo')
            )
            ->addChild(
                A::create()->setInnerText('Go To My Website')->setHref('http://www.ahmad-saleh.net')
            );
    }

}
