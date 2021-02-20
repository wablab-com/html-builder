<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Map;

abstract class AbstractMapTest extends AbstractTestCase
{

    protected Map $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Map::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setName('name');
    
        $this->assertEquals('name', $this->tagObj->getName('name'));
    
    }

}
