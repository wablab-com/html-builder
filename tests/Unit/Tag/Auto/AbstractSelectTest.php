<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Select;

abstract class AbstractSelectTest extends AbstractTestCase
{

    protected Select $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Select::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAutofocus('autofocus');
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setMultiple('multiple');
        $this->tagObj->setName('name');
        $this->tagObj->setRequired('required');
        $this->tagObj->setSize('size');
    
        $this->assertEquals('autofocus', $this->tagObj->getAutofocus('autofocus'));
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('multiple', $this->tagObj->getMultiple('multiple'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('required', $this->tagObj->getRequired('required'));
        $this->assertEquals('size', $this->tagObj->getSize('size'));
    
    }

}
