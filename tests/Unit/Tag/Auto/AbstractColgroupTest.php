<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Colgroup;

abstract class AbstractColgroupTest extends AbstractTestCase
{

    protected Colgroup $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Colgroup::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setSpan('span');
    
        $this->assertEquals('span', $this->tagObj->getSpan('span'));
    
    }

}
