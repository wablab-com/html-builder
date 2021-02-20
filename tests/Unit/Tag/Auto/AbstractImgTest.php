<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Img;

abstract class AbstractImgTest extends AbstractTestCase
{

    protected Img $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Img::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAlt('alt');
        $this->tagObj->setHeight('height');
        $this->tagObj->setIsmap('ismap');
        $this->tagObj->setOnabort('onabort');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setSizes('sizes');
        $this->tagObj->setSrc('src');
        $this->tagObj->setSrcset('srcset');
        $this->tagObj->setUsemap('usemap');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('alt', $this->tagObj->getAlt('alt'));
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('ismap', $this->tagObj->getIsmap('ismap'));
        $this->assertEquals('onabort', $this->tagObj->getOnabort('onabort'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('sizes', $this->tagObj->getSizes('sizes'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('srcset', $this->tagObj->getSrcset('srcset'));
        $this->assertEquals('usemap', $this->tagObj->getUsemap('usemap'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
