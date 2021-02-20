<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Script;

abstract class AbstractScriptTest extends AbstractTestCase
{

    protected Script $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Script::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAsync('async');
        $this->tagObj->setCharset('charset');
        $this->tagObj->setDefer('defer');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setSrc('src');
        $this->tagObj->setType('type');
    
        $this->assertEquals('async', $this->tagObj->getAsync('async'));
        $this->assertEquals('charset', $this->tagObj->getCharset('charset'));
        $this->assertEquals('defer', $this->tagObj->getDefer('defer'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
    
    }

}
