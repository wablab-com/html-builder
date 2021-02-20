<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Meta;

abstract class AbstractMetaTest extends AbstractTestCase
{

    protected Meta $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Meta::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setCharset('charset');
        $this->tagObj->setContent('content');
        $this->tagObj->setHttpEquiv('http-equiv');
        $this->tagObj->setName('name');
    
        $this->assertEquals('charset', $this->tagObj->getCharset('charset'));
        $this->assertEquals('content', $this->tagObj->getContent('content'));
        $this->assertEquals('http-equiv', $this->tagObj->getHttpEquiv('http-equiv'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
    
    }

}
