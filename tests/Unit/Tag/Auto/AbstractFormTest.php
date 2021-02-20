<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Form;

abstract class AbstractFormTest extends AbstractTestCase
{

    protected Form $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Form::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAcceptCharset('accept-charset');
        $this->tagObj->setAction('action');
        $this->tagObj->setAutocomplete('autocomplete');
        $this->tagObj->setEnctype('enctype');
        $this->tagObj->setMethod('method');
        $this->tagObj->setName('name');
        $this->tagObj->setNovalidate('novalidate');
        $this->tagObj->setOnreset('onreset');
        $this->tagObj->setOnsubmit('onsubmit');
        $this->tagObj->setRel('rel');
        $this->tagObj->setTarget('target');
    
        $this->assertEquals('accept-charset', $this->tagObj->getAcceptCharset('accept-charset'));
        $this->assertEquals('action', $this->tagObj->getAction('action'));
        $this->assertEquals('autocomplete', $this->tagObj->getAutocomplete('autocomplete'));
        $this->assertEquals('enctype', $this->tagObj->getEnctype('enctype'));
        $this->assertEquals('method', $this->tagObj->getMethod('method'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('novalidate', $this->tagObj->getNovalidate('novalidate'));
        $this->assertEquals('onreset', $this->tagObj->getOnreset('onreset'));
        $this->assertEquals('onsubmit', $this->tagObj->getOnsubmit('onsubmit'));
        $this->assertEquals('rel', $this->tagObj->getRel('rel'));
        $this->assertEquals('target', $this->tagObj->getTarget('target'));
    
    }

}
