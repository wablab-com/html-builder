<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Details;

abstract class AbstractDetailsTest extends AbstractTestCase
{

    protected Details $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Details::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setOntoggle('ontoggle');
        $this->tagObj->setOpen('open');
    
        $this->assertEquals('ontoggle', $this->tagObj->getOntoggle('ontoggle'));
        $this->assertEquals('open', $this->tagObj->getOpen('open'));
    
    }

}
