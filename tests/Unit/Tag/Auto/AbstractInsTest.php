<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Ins;

abstract class AbstractInsTest extends AbstractTestCase
{

    protected Ins $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Ins::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setCite('cite');
        $this->tagObj->setDatetime('datetime');
    
        $this->assertEquals('cite', $this->tagObj->getCite('cite'));
        $this->assertEquals('datetime', $this->tagObj->getDatetime('datetime'));
    
    }

}
