<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Col;

abstract class AbstractColTest extends AbstractTestCase
{

    protected Col $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Col::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setSpan('span');
    
        $this->assertEquals('span', $this->tagObj->getSpan('span'));
    
    }

}
