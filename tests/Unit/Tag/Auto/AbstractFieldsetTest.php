<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Fieldset;

abstract class AbstractFieldsetTest extends AbstractTestCase
{

    protected Fieldset $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Fieldset::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setName('name');
    
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
    
    }

}
