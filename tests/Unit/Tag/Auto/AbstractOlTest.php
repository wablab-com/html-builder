<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Ol;

abstract class AbstractOlTest extends AbstractTestCase
{

    protected Ol $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Ol::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setReversed('reversed');
        $this->tagObj->setStart('start');
    
        $this->assertEquals('reversed', $this->tagObj->getReversed('reversed'));
        $this->assertEquals('start', $this->tagObj->getStart('start'));
    
    }

}
