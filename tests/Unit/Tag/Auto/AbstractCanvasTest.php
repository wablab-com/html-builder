<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Canvas;

abstract class AbstractCanvasTest extends AbstractTestCase
{

    protected Canvas $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Canvas::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setHeight('height');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
