<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Q;

abstract class AbstractQTest extends AbstractTestCase
{

    protected Q $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Q::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setCite('cite');
    
        $this->assertEquals('cite', $this->tagObj->getCite('cite'));
    
    }

}
