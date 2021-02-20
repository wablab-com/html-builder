<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Param;

abstract class AbstractParamTest extends AbstractTestCase
{

    protected Param $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Param::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setName('name');
        $this->tagObj->setValue('value');
    
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
    
    }

}
