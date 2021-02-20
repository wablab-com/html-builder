<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Body;

abstract class AbstractBodyTest extends AbstractTestCase
{

    protected Body $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Body::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setOnafterprint('onafterprint');
        $this->tagObj->setOnbeforeprint('onbeforeprint');
        $this->tagObj->setOnbeforeunload('onbeforeunload');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setOnhashchange('onhashchange');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setOnoffline('onoffline');
        $this->tagObj->setOnonline('ononline');
        $this->tagObj->setOnpagehide('onpagehide');
        $this->tagObj->setOnpageshow('onpageshow');
        $this->tagObj->setOnpopstate('onpopstate');
        $this->tagObj->setOnresize('onresize');
        $this->tagObj->setOnstorage('onstorage');
        $this->tagObj->setOnunload('onunload');
    
        $this->assertEquals('onafterprint', $this->tagObj->getOnafterprint('onafterprint'));
        $this->assertEquals('onbeforeprint', $this->tagObj->getOnbeforeprint('onbeforeprint'));
        $this->assertEquals('onbeforeunload', $this->tagObj->getOnbeforeunload('onbeforeunload'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('onhashchange', $this->tagObj->getOnhashchange('onhashchange'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('onoffline', $this->tagObj->getOnoffline('onoffline'));
        $this->assertEquals('ononline', $this->tagObj->getOnonline('ononline'));
        $this->assertEquals('onpagehide', $this->tagObj->getOnpagehide('onpagehide'));
        $this->assertEquals('onpageshow', $this->tagObj->getOnpageshow('onpageshow'));
        $this->assertEquals('onpopstate', $this->tagObj->getOnpopstate('onpopstate'));
        $this->assertEquals('onresize', $this->tagObj->getOnresize('onresize'));
        $this->assertEquals('onstorage', $this->tagObj->getOnstorage('onstorage'));
        $this->assertEquals('onunload', $this->tagObj->getOnunload('onunload'));
    
    }

}
