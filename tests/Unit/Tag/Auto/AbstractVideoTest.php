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
        $this->tagObj->setAccesskey('accesskey');
        $this->tagObj->setClass('class');
        $this->tagObj->setContenteditable('contenteditable');
        $this->tagObj->setDir('dir');
        $this->tagObj->setDraggable('draggable');
        $this->tagObj->setHidden('hidden');
        $this->tagObj->setId('id');
        $this->tagObj->setLang('lang');
        $this->tagObj->setSpellcheck('spellcheck');
        $this->tagObj->setStyle('style');
        $this->tagObj->setTabindex('tabindex');
        $this->tagObj->setTitle('title');
        $this->tagObj->setTranslate('translate');
        $this->tagObj->setOnblur('onblur');
        $this->tagObj->setOnchange('onchange');
        $this->tagObj->setOnclick('onclick');
        $this->tagObj->setOncontextmenu('oncontextmenu');
        $this->tagObj->setOncopy('oncopy');
        $this->tagObj->setOncut('oncut');
        $this->tagObj->setOndblclick('ondblclick');
        $this->tagObj->setOndrag('ondrag');
        $this->tagObj->setOndragend('ondragend');
        $this->tagObj->setOndragenter('ondragenter');
        $this->tagObj->setOndragleave('ondragleave');
        $this->tagObj->setOndragover('ondragover');
        $this->tagObj->setOndragstart('ondragstart');
        $this->tagObj->setOndrop('ondrop');
        $this->tagObj->setOnfocus('onfocus');
        $this->tagObj->setOninput('oninput');
        $this->tagObj->setOninvalid('oninvalid');
        $this->tagObj->setOnkeydown('onkeydown');
        $this->tagObj->setOnkeypress('onkeypress');
        $this->tagObj->setOnkeyup('onkeyup');
        $this->tagObj->setOnmousedown('onmousedown');
        $this->tagObj->setOnmousemove('onmousemove');
        $this->tagObj->setOnmouseout('onmouseout');
        $this->tagObj->setOnmouseover('onmouseover');
        $this->tagObj->setOnmouseup('onmouseup');
        $this->tagObj->setOnmousewheel('onmousewheel');
        $this->tagObj->setOnpaste('onpaste');
        $this->tagObj->setOnscroll('onscroll');
        $this->tagObj->setOnselect('onselect');
        $this->tagObj->setOnwheel('onwheel');
        $this->tagObj->setAlign('align');
        $this->tagObj->setBgcolor('bgcolor');
        $this->tagObj->setBorder('border');
        $this->tagObj->setColor('color');
    
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
        $this->assertEquals('accesskey', $this->tagObj->getAccesskey('accesskey'));
        $this->assertEquals('class', $this->tagObj->getClass('class'));
        $this->assertEquals('contenteditable', $this->tagObj->getContenteditable('contenteditable'));
        $this->assertEquals('dir', $this->tagObj->getDir('dir'));
        $this->assertEquals('draggable', $this->tagObj->getDraggable('draggable'));
        $this->assertEquals('hidden', $this->tagObj->getHidden('hidden'));
        $this->assertEquals('id', $this->tagObj->getId('id'));
        $this->assertEquals('lang', $this->tagObj->getLang('lang'));
        $this->assertEquals('spellcheck', $this->tagObj->getSpellcheck('spellcheck'));
        $this->assertEquals('style', $this->tagObj->getStyle('style'));
        $this->assertEquals('tabindex', $this->tagObj->getTabindex('tabindex'));
        $this->assertEquals('title', $this->tagObj->getTitle('title'));
        $this->assertEquals('translate', $this->tagObj->getTranslate('translate'));
        $this->assertEquals('onblur', $this->tagObj->getOnblur('onblur'));
        $this->assertEquals('onchange', $this->tagObj->getOnchange('onchange'));
        $this->assertEquals('onclick', $this->tagObj->getOnclick('onclick'));
        $this->assertEquals('oncontextmenu', $this->tagObj->getOncontextmenu('oncontextmenu'));
        $this->assertEquals('oncopy', $this->tagObj->getOncopy('oncopy'));
        $this->assertEquals('oncut', $this->tagObj->getOncut('oncut'));
        $this->assertEquals('ondblclick', $this->tagObj->getOndblclick('ondblclick'));
        $this->assertEquals('ondrag', $this->tagObj->getOndrag('ondrag'));
        $this->assertEquals('ondragend', $this->tagObj->getOndragend('ondragend'));
        $this->assertEquals('ondragenter', $this->tagObj->getOndragenter('ondragenter'));
        $this->assertEquals('ondragleave', $this->tagObj->getOndragleave('ondragleave'));
        $this->assertEquals('ondragover', $this->tagObj->getOndragover('ondragover'));
        $this->assertEquals('ondragstart', $this->tagObj->getOndragstart('ondragstart'));
        $this->assertEquals('ondrop', $this->tagObj->getOndrop('ondrop'));
        $this->assertEquals('onfocus', $this->tagObj->getOnfocus('onfocus'));
        $this->assertEquals('oninput', $this->tagObj->getOninput('oninput'));
        $this->assertEquals('oninvalid', $this->tagObj->getOninvalid('oninvalid'));
        $this->assertEquals('onkeydown', $this->tagObj->getOnkeydown('onkeydown'));
        $this->assertEquals('onkeypress', $this->tagObj->getOnkeypress('onkeypress'));
        $this->assertEquals('onkeyup', $this->tagObj->getOnkeyup('onkeyup'));
        $this->assertEquals('onmousedown', $this->tagObj->getOnmousedown('onmousedown'));
        $this->assertEquals('onmousemove', $this->tagObj->getOnmousemove('onmousemove'));
        $this->assertEquals('onmouseout', $this->tagObj->getOnmouseout('onmouseout'));
        $this->assertEquals('onmouseover', $this->tagObj->getOnmouseover('onmouseover'));
        $this->assertEquals('onmouseup', $this->tagObj->getOnmouseup('onmouseup'));
        $this->assertEquals('onmousewheel', $this->tagObj->getOnmousewheel('onmousewheel'));
        $this->assertEquals('onpaste', $this->tagObj->getOnpaste('onpaste'));
        $this->assertEquals('onscroll', $this->tagObj->getOnscroll('onscroll'));
        $this->assertEquals('onselect', $this->tagObj->getOnselect('onselect'));
        $this->assertEquals('onwheel', $this->tagObj->getOnwheel('onwheel'));
        $this->assertEquals('align', $this->tagObj->getAlign('align'));
        $this->assertEquals('bgcolor', $this->tagObj->getBgcolor('bgcolor'));
        $this->assertEquals('border', $this->tagObj->getBorder('border'));
        $this->assertEquals('color', $this->tagObj->getColor('color'));
    
    }

}
