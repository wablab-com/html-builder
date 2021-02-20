<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Blockquote;

abstract class AbstractBlockquoteTest extends AbstractTestCase
{

    protected Blockquote $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Blockquote::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setCite('cite');
    
        $this->assertEquals('cite', $this->tagObj->getCite('cite'));
    
    }

}
