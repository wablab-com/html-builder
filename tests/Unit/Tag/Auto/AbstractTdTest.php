<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Td;

abstract class AbstractTdTest extends AbstractTestCase
{

    protected Td $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Td::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setColspan('colspan');
        $this->tagObj->setHeaders('headers');
        $this->tagObj->setRowspan('rowspan');
    
        $this->assertEquals('colspan', $this->tagObj->getColspan('colspan'));
        $this->assertEquals('headers', $this->tagObj->getHeaders('headers'));
        $this->assertEquals('rowspan', $this->tagObj->getRowspan('rowspan'));
    
    }

}
