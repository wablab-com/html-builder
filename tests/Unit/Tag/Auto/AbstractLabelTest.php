<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Label;

abstract class AbstractLabelTest extends AbstractTestCase
{

    protected Label $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Label::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setFor('for');
        $this->tagObj->setForm('form');
    
        $this->assertEquals('for', $this->tagObj->getFor('for'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
    
    }

}
