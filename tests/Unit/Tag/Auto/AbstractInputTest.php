<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Input;

abstract class AbstractInputTest extends AbstractTestCase
{

    protected Input $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Input::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAccept('accept');
        $this->tagObj->setAlt('alt');
        $this->tagObj->setAutocomplete('autocomplete');
        $this->tagObj->setAutofocus('autofocus');
        $this->tagObj->setChecked('checked');
        $this->tagObj->setDirname('dirname');
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setFormaction('formaction');
        $this->tagObj->setHeight('height');
        $this->tagObj->setList('list');
        $this->tagObj->setMax('max');
        $this->tagObj->setMaxlength('maxlength');
        $this->tagObj->setMin('min');
        $this->tagObj->setMultiple('multiple');
        $this->tagObj->setName('name');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setOnsearch('onsearch');
        $this->tagObj->setPattern('pattern');
        $this->tagObj->setPlaceholder('placeholder');
        $this->tagObj->setReadonly('readonly');
        $this->tagObj->setRequired('required');
        $this->tagObj->setSize('size');
        $this->tagObj->setSrc('src');
        $this->tagObj->setStep('step');
        $this->tagObj->setType('type');
        $this->tagObj->setValue('value');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('accept', $this->tagObj->getAccept('accept'));
        $this->assertEquals('alt', $this->tagObj->getAlt('alt'));
        $this->assertEquals('autocomplete', $this->tagObj->getAutocomplete('autocomplete'));
        $this->assertEquals('autofocus', $this->tagObj->getAutofocus('autofocus'));
        $this->assertEquals('checked', $this->tagObj->getChecked('checked'));
        $this->assertEquals('dirname', $this->tagObj->getDirname('dirname'));
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('formaction', $this->tagObj->getFormaction('formaction'));
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('list', $this->tagObj->getList('list'));
        $this->assertEquals('max', $this->tagObj->getMax('max'));
        $this->assertEquals('maxlength', $this->tagObj->getMaxlength('maxlength'));
        $this->assertEquals('min', $this->tagObj->getMin('min'));
        $this->assertEquals('multiple', $this->tagObj->getMultiple('multiple'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('onsearch', $this->tagObj->getOnsearch('onsearch'));
        $this->assertEquals('pattern', $this->tagObj->getPattern('pattern'));
        $this->assertEquals('placeholder', $this->tagObj->getPlaceholder('placeholder'));
        $this->assertEquals('readonly', $this->tagObj->getReadonly('readonly'));
        $this->assertEquals('required', $this->tagObj->getRequired('required'));
        $this->assertEquals('size', $this->tagObj->getSize('size'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('step', $this->tagObj->getStep('step'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
