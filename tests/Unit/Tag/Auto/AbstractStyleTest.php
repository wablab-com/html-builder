<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Style;

abstract class AbstractStyleTest extends AbstractTestCase
{

    protected Style $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Style::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setMedia('media');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setType('type');
    
        $this->assertEquals('media', $this->tagObj->getMedia('media'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
    
    }

}
