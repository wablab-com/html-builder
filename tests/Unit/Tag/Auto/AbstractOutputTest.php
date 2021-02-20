<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Output;

abstract class AbstractOutputTest extends AbstractTestCase
{

    protected Output $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Output::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setFor('for');
        $this->tagObj->setForm('form');
        $this->tagObj->setName('name');
    
        $this->assertEquals('for', $this->tagObj->getFor('for'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
    
    }

}
