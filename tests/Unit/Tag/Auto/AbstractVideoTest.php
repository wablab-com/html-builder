<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Video;

abstract class AbstractVideoTest extends AbstractTestCase
{

    protected Video $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Video::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAutoplay('autoplay');
        $this->tagObj->setControls('controls');
        $this->tagObj->setHeight('height');
        $this->tagObj->setLoop('loop');
        $this->tagObj->setMuted('muted');
        $this->tagObj->setOnabort('onabort');
        $this->tagObj->setOncanplay('oncanplay');
        $this->tagObj->setOncanplaythrough('oncanplaythrough');
        $this->tagObj->setOndurationchange('ondurationchange');
        $this->tagObj->setOnemptied('onemptied');
        $this->tagObj->setOnended('onended');
        $this->tagObj->setOnerror('onerror');
        $this->tagObj->setOnloadeddata('onloadeddata');
        $this->tagObj->setOnloadedmetadata('onloadedmetadata');
        $this->tagObj->setOnloadstart('onloadstart');
        $this->tagObj->setOnpause('onpause');
        $this->tagObj->setOnplay('onplay');
        $this->tagObj->setOnplaying('onplaying');
        $this->tagObj->setOnprogress('onprogress');
        $this->tagObj->setOnratechange('onratechange');
        $this->tagObj->setOnseeked('onseeked');
        $this->tagObj->setOnseeking('onseeking');
        $this->tagObj->setOnstalled('onstalled');
        $this->tagObj->setOnsuspend('onsuspend');
        $this->tagObj->setOntimeupdate('ontimeupdate');
        $this->tagObj->setOnvolumechange('onvolumechange');
        $this->tagObj->setOnwaiting('onwaiting');
        $this->tagObj->setPoster('poster');
        $this->tagObj->setPreload('preload');
        $this->tagObj->setSrc('src');
        $this->tagObj->setWidth('width');
    
        $this->assertEquals('autoplay', $this->tagObj->getAutoplay('autoplay'));
        $this->assertEquals('controls', $this->tagObj->getControls('controls'));
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('loop', $this->tagObj->getLoop('loop'));
        $this->assertEquals('muted', $this->tagObj->getMuted('muted'));
        $this->assertEquals('onabort', $this->tagObj->getOnabort('onabort'));
        $this->assertEquals('oncanplay', $this->tagObj->getOncanplay('oncanplay'));
        $this->assertEquals('oncanplaythrough', $this->tagObj->getOncanplaythrough('oncanplaythrough'));
        $this->assertEquals('ondurationchange', $this->tagObj->getOndurationchange('ondurationchange'));
        $this->assertEquals('onemptied', $this->tagObj->getOnemptied('onemptied'));
        $this->assertEquals('onended', $this->tagObj->getOnended('onended'));
        $this->assertEquals('onerror', $this->tagObj->getOnerror('onerror'));
        $this->assertEquals('onloadeddata', $this->tagObj->getOnloadeddata('onloadeddata'));
        $this->assertEquals('onloadedmetadata', $this->tagObj->getOnloadedmetadata('onloadedmetadata'));
        $this->assertEquals('onloadstart', $this->tagObj->getOnloadstart('onloadstart'));
        $this->assertEquals('onpause', $this->tagObj->getOnpause('onpause'));
        $this->assertEquals('onplay', $this->tagObj->getOnplay('onplay'));
        $this->assertEquals('onplaying', $this->tagObj->getOnplaying('onplaying'));
        $this->assertEquals('onprogress', $this->tagObj->getOnprogress('onprogress'));
        $this->assertEquals('onratechange', $this->tagObj->getOnratechange('onratechange'));
        $this->assertEquals('onseeked', $this->tagObj->getOnseeked('onseeked'));
        $this->assertEquals('onseeking', $this->tagObj->getOnseeking('onseeking'));
        $this->assertEquals('onstalled', $this->tagObj->getOnstalled('onstalled'));
        $this->assertEquals('onsuspend', $this->tagObj->getOnsuspend('onsuspend'));
        $this->assertEquals('ontimeupdate', $this->tagObj->getOntimeupdate('ontimeupdate'));
        $this->assertEquals('onvolumechange', $this->tagObj->getOnvolumechange('onvolumechange'));
        $this->assertEquals('onwaiting', $this->tagObj->getOnwaiting('onwaiting'));
        $this->assertEquals('poster', $this->tagObj->getPoster('poster'));
        $this->assertEquals('preload', $this->tagObj->getPreload('preload'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('width', $this->tagObj->getWidth('width'));
    
    }

}
