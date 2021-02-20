<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Button;

abstract class AbstractButtonTest extends AbstractTestCase
{

    protected Button $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Button::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAutofocus('autofocus');
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setFormaction('formaction');
        $this->tagObj->setName('name');
        $this->tagObj->setType('type');
        $this->tagObj->setValue('value');
    
        $this->assertEquals('autofocus', $this->tagObj->getAutofocus('autofocus'));
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('formaction', $this->tagObj->getFormaction('formaction'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
    
    }

}
