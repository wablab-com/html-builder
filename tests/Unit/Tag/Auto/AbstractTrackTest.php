<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Track;

abstract class AbstractTrackTest extends AbstractTestCase
{

    protected Track $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Track::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setDefault('default');
        $this->tagObj->setKind('kind');
        $this->tagObj->setLabel('label');
        $this->tagObj->setOncuechange('oncuechange');
        $this->tagObj->setSrc('src');
        $this->tagObj->setSrclang('srclang');
    
        $this->assertEquals('default', $this->tagObj->getDefault('default'));
        $this->assertEquals('kind', $this->tagObj->getKind('kind'));
        $this->assertEquals('label', $this->tagObj->getLabel('label'));
        $this->assertEquals('oncuechange', $this->tagObj->getOncuechange('oncuechange'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('srclang', $this->tagObj->getSrclang('srclang'));
    
    }

}
