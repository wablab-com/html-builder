<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Textarea;

abstract class AbstractTextareaTest extends AbstractTestCase
{

    protected Textarea $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Textarea::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAutofocus('autofocus');
        $this->tagObj->setCols('cols');
        $this->tagObj->setDirname('dirname');
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setMaxlength('maxlength');
        $this->tagObj->setName('name');
        $this->tagObj->setPlaceholder('placeholder');
        $this->tagObj->setReadonly('readonly');
        $this->tagObj->setRequired('required');
        $this->tagObj->setRows('rows');
        $this->tagObj->setWrap('wrap');
    
        $this->assertEquals('autofocus', $this->tagObj->getAutofocus('autofocus'));
        $this->assertEquals('cols', $this->tagObj->getCols('cols'));
        $this->assertEquals('dirname', $this->tagObj->getDirname('dirname'));
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('maxlength', $this->tagObj->getMaxlength('maxlength'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('placeholder', $this->tagObj->getPlaceholder('placeholder'));
        $this->assertEquals('readonly', $this->tagObj->getReadonly('readonly'));
        $this->assertEquals('required', $this->tagObj->getRequired('required'));
        $this->assertEquals('rows', $this->tagObj->getRows('rows'));
        $this->assertEquals('wrap', $this->tagObj->getWrap('wrap'));
    
    }

}
