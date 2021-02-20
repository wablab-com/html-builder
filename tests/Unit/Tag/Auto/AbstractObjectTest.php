<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\ObjectTag;

abstract class AbstractObjectTest extends AbstractTestCase
{

    protected ObjectTag $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = ObjectTag::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setData('data');
        $this->tagObj->setForm('form');
        $this->tagObj->setHeight('height');
        $this->tagObj->setName('name');
        $this->tagObj->setOnabort('onabort');
        $this->tagObj->setOncanplay('oncanplay');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setType('type');
        $this->tagObj->setUsemap('usemap');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('data', $this->tagObj->getData('data'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('onabort', $this->tagObj->getOnabort('onabort'));
        $this->assertEquals('oncanplay', $this->tagObj->getOncanplay('oncanplay'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
        $this->assertEquals('usemap', $this->tagObj->getUsemap('usemap'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
