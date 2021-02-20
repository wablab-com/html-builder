<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Option;

abstract class AbstractOptionTest extends AbstractTestCase
{

    protected Option $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Option::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setLabel('label');
        $this->tagObj->setSelected('selected');
        $this->tagObj->setValue('value');
    
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('label', $this->tagObj->getLabel('label'));
        $this->assertEquals('selected', $this->tagObj->getSelected('selected'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
    
    }

}
