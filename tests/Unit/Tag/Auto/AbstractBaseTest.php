<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Base;

abstract class AbstractBaseTest extends AbstractTestCase
{

    protected Base $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Base::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setHref('href');
        $this->tagObj->setTarget('target');
    
        $this->assertEquals('href', $this->tagObj->getHref('href'));
        $this->assertEquals('target', $this->tagObj->getTarget('target'));
    
    }

}
