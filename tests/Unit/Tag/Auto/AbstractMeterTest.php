<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Meter;

abstract class AbstractMeterTest extends AbstractTestCase
{

    protected Meter $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Meter::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setForm('form');
        $this->tagObj->setHigh('high');
        $this->tagObj->setLow('low');
        $this->tagObj->setMax('max');
        $this->tagObj->setMin('min');
        $this->tagObj->setOptimum('optimum');
        $this->tagObj->setValue('value');
    
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('high', $this->tagObj->getHigh('high'));
        $this->assertEquals('low', $this->tagObj->getLow('low'));
        $this->assertEquals('max', $this->tagObj->getMax('max'));
        $this->assertEquals('min', $this->tagObj->getMin('min'));
        $this->assertEquals('optimum', $this->tagObj->getOptimum('optimum'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
    
    }

}
