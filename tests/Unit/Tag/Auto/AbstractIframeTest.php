<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Iframe;

abstract class AbstractIframeTest extends AbstractTestCase
{

    protected Iframe $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Iframe::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setHeight('height');
        $this->tagObj->setName('name');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setSandbox('sandbox');
        $this->tagObj->setSrc('src');
        $this->tagObj->setSrcdoc('srcdoc');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('sandbox', $this->tagObj->getSandbox('sandbox'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('srcdoc', $this->tagObj->getSrcdoc('srcdoc'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
