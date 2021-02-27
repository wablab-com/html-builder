<?php

namespace WabLab\Tests\Unit;

use WabLab\HtmlBuilder\HTML\Tag\A;
use WabLab\HtmlBuilder\HTML\Tag\AbstractTag;
use WabLab\HtmlBuilder\HTML\Tag\Div;
use WabLab\HtmlBuilder\HTML\Tag\Span;
use WabLab\Tests\Classes\BlankTagClass;
use WabLab\Tests\Unit\Tag\Auto\AbstractATest;

class AbstractFunctionsTest extends AbstractATest
{
    public function testTagHashGetter() {
        $this->assertNotEmpty(A::create()->hash());
    }

    public function testInnerTextSetterAndGetter() {
        $tag = A::create()->setInnerText('test inner text');
        $this->assertEquals('test inner text', $tag->getInnerText());
    }

    public function testGetTagName() {
        $this->assertEquals('a', A::create()->getTagName());
    }

    public function testAttributesGetter()
    {
        $this->assertCount(0, A::create()->getAttributes());
        $this->assertCount(1, A::create()->setClass('testclass')->getAttributes());
    }

    public function testIsShortCloseGetter()
    {
        $this->assertTrue(A::create()->isShortCloseAllowed());
    }

    public function testRemoveAttribute()
    {
        $tag = A::create()->setClass('test_class');
        $this->assertEquals('test_class', $tag->getClass());
        $tag->removeAttribute('class');
        $this->assertCount(0, $tag->getAttributes());
    }

    public function testBlankClassTagException() {
        try {
            BlankTagClass::create();
            $this->assertTrue(false);
        } catch (\Exception $e) {
            $this->assertStringContainsString('variable must be overridden', $e->getMessage());
        }
    }

    public function testAddAndRemoveChild()
    {
        $divTag = Div::create()->setClass('test-class');
        $tag = A::create()
            ->addChild(
                Span::create()
            )
            ->addChild(
                $divTag
            );

        $this->assertCount(2, $tag->getChildren());
        $tag->removeChild($divTag);
        $this->assertCount(1, $tag->getChildren());
    }

}
