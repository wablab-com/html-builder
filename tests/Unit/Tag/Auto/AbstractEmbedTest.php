<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Embed;

abstract class AbstractEmbedTest extends AbstractTestCase
{

    protected Embed $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Embed::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setHeight('height');
        $this->tagObj->setOnabort('onabort');
        $this->tagObj->setOncanplay('oncanplay');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setSrc('src');
        $this->tagObj->setType('type');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('onabort', $this->tagObj->getOnabort('onabort'));
        $this->assertEquals('oncanplay', $this->tagObj->getOncanplay('oncanplay'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
