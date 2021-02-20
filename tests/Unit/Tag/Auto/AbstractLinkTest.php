<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Link;

abstract class AbstractLinkTest extends AbstractTestCase
{

    protected Link $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Link::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setHref('href');
        $this->tagObj->setHreflang('hreflang');
        $this->tagObj->setMedia('media');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setRel('rel');
        $this->tagObj->setSizes('sizes');
        $this->tagObj->setType('type');
    
        $this->assertEquals('href', $this->tagObj->getHref('href'));
        $this->assertEquals('hreflang', $this->tagObj->getHreflang('hreflang'));
        $this->assertEquals('media', $this->tagObj->getMedia('media'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('rel', $this->tagObj->getRel('rel'));
        $this->assertEquals('sizes', $this->tagObj->getSizes('sizes'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
    
    }

}
