<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Progress;

abstract class AbstractProgressTest extends AbstractTestCase
{

    protected Progress $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Progress::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setMax('max');
        $this->tagObj->setValue('value');
    
        $this->assertEquals('max', $this->tagObj->getMax('max'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
    
    }

}
