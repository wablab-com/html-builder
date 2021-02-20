<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Source;

abstract class AbstractSourceTest extends AbstractTestCase
{

    protected Source $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Source::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setMedia('media');
        $this->tagObj->setSizes('sizes');
        $this->tagObj->setSrc('src');
        $this->tagObj->setSrcset('srcset');
        $this->tagObj->setType('type');
    
        $this->assertEquals('media', $this->tagObj->getMedia('media'));
        $this->assertEquals('sizes', $this->tagObj->getSizes('sizes'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('srcset', $this->tagObj->getSrcset('srcset'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
    
    }

}
