<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\A;

abstract class AbstractATest extends AbstractTestCase
{

    protected A $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = A::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setDownload('download');
        $this->tagObj->setHref('href');
        $this->tagObj->setHreflang('hreflang');
        $this->tagObj->setMedia('media');
        $this->tagObj->setRel('rel');
        $this->tagObj->setTarget('target');
        $this->tagObj->setType('type');
    
        $this->assertEquals('download', $this->tagObj->getDownload('download'));
        $this->assertEquals('href', $this->tagObj->getHref('href'));
        $this->assertEquals('hreflang', $this->tagObj->getHreflang('hreflang'));
        $this->assertEquals('media', $this->tagObj->getMedia('media'));
        $this->assertEquals('rel', $this->tagObj->getRel('rel'));
        $this->assertEquals('target', $this->tagObj->getTarget('target'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
    
    }

}
