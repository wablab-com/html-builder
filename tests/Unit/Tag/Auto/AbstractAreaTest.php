<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Area;

abstract class AbstractAreaTest extends AbstractTestCase
{

    protected Area $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Area::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAlt('alt');
        $this->tagObj->setCoords('coords');
        $this->tagObj->setDownload('download');
        $this->tagObj->setHref('href');
        $this->tagObj->setHreflang('hreflang');
        $this->tagObj->setMedia('media');
        $this->tagObj->setRel('rel');
        $this->tagObj->setShape('shape');
        $this->tagObj->setTarget('target');
    
        $this->assertEquals('alt', $this->tagObj->getAlt('alt'));
        $this->assertEquals('coords', $this->tagObj->getCoords('coords'));
        $this->assertEquals('download', $this->tagObj->getDownload('download'));
        $this->assertEquals('href', $this->tagObj->getHref('href'));
        $this->assertEquals('hreflang', $this->tagObj->getHreflang('hreflang'));
        $this->assertEquals('media', $this->tagObj->getMedia('media'));
        $this->assertEquals('rel', $this->tagObj->getRel('rel'));
        $this->assertEquals('shape', $this->tagObj->getShape('shape'));
        $this->assertEquals('target', $this->tagObj->getTarget('target'));
    
    }

}
