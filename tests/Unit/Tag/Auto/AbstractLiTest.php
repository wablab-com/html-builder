<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Li;

abstract class AbstractLiTest extends AbstractTestCase
{

    protected Li $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Li::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setValue('value');
    
        $this->assertEquals('value', $this->tagObj->getValue('value'));
    
    }

}
