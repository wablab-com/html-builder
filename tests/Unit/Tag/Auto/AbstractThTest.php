<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Th;

abstract class AbstractThTest extends AbstractTestCase
{

    protected Th $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Th::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setColspan('colspan');
        $this->tagObj->setHeaders('headers');
        $this->tagObj->setRowspan('rowspan');
        $this->tagObj->setScope('scope');
    
        $this->assertEquals('colspan', $this->tagObj->getColspan('colspan'));
        $this->assertEquals('headers', $this->tagObj->getHeaders('headers'));
        $this->assertEquals('rowspan', $this->tagObj->getRowspan('rowspan'));
        $this->assertEquals('scope', $this->tagObj->getScope('scope'));
    
    }

}
