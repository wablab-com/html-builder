<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Time;

abstract class AbstractTimeTest extends AbstractTestCase
{

    protected Time $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Time::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setDatetime('datetime');
    
        $this->assertEquals('datetime', $this->tagObj->getDatetime('datetime'));
    
    }

}
