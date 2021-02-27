<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;
use WabLab\HtmlBuilder\HTML\Tag\AbstractTag;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Tag\Audio;

abstract class AbstractAudioTest extends AbstractTestCase
{

    protected Audio $tagObj;
    protected RendererMapper $rendererMapper;
    

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Audio::create();
        $this->rendererMapper = new RendererMapper();
        $this->rendererMapper->register(AbstractTag::class, HtmlTagRenderer::class);
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAutoplay('autoplay');
        $this->tagObj->setControls('controls');
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
        $this->tagObj->setPreload('preload');
        $this->tagObj->setSrc('src');
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
        $this->assertEquals('preload', $this->tagObj->getPreload('preload'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
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

    public function testTagBasicRenderer() {
        $this->tagObj->setAutoplay('autoplay');
        $this->tagObj->setControls('controls');
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
        $this->tagObj->setPreload('preload');
        $this->tagObj->setSrc('src');
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
    
        $renderer = new HtmlTagRenderer($this->rendererMapper, $this->tagObj);
        $renderedTag = $renderer->render();
    
        $this->assertStringContainsString('<audio', $renderedTag);
        $this->assertStringContainsString('autoplay', $renderedTag);
        $this->assertStringContainsString('controls', $renderedTag);
        $this->assertStringContainsString('loop', $renderedTag);
        $this->assertStringContainsString('muted', $renderedTag);
        $this->assertStringContainsString('onabort', $renderedTag);
        $this->assertStringContainsString('oncanplay', $renderedTag);
        $this->assertStringContainsString('oncanplaythrough', $renderedTag);
        $this->assertStringContainsString('ondurationchange', $renderedTag);
        $this->assertStringContainsString('onemptied', $renderedTag);
        $this->assertStringContainsString('onended', $renderedTag);
        $this->assertStringContainsString('onerror', $renderedTag);
        $this->assertStringContainsString('onloadeddata', $renderedTag);
        $this->assertStringContainsString('onloadedmetadata', $renderedTag);
        $this->assertStringContainsString('onloadstart', $renderedTag);
        $this->assertStringContainsString('onpause', $renderedTag);
        $this->assertStringContainsString('onplay', $renderedTag);
        $this->assertStringContainsString('onplaying', $renderedTag);
        $this->assertStringContainsString('onprogress', $renderedTag);
        $this->assertStringContainsString('onratechange', $renderedTag);
        $this->assertStringContainsString('onseeked', $renderedTag);
        $this->assertStringContainsString('onseeking', $renderedTag);
        $this->assertStringContainsString('onstalled', $renderedTag);
        $this->assertStringContainsString('onsuspend', $renderedTag);
        $this->assertStringContainsString('ontimeupdate', $renderedTag);
        $this->assertStringContainsString('onvolumechange', $renderedTag);
        $this->assertStringContainsString('onwaiting', $renderedTag);
        $this->assertStringContainsString('preload', $renderedTag);
        $this->assertStringContainsString('src', $renderedTag);
        $this->assertStringContainsString('accesskey', $renderedTag);
        $this->assertStringContainsString('class', $renderedTag);
        $this->assertStringContainsString('contenteditable', $renderedTag);
        $this->assertStringContainsString('dir', $renderedTag);
        $this->assertStringContainsString('draggable', $renderedTag);
        $this->assertStringContainsString('hidden', $renderedTag);
        $this->assertStringContainsString('id', $renderedTag);
        $this->assertStringContainsString('lang', $renderedTag);
        $this->assertStringContainsString('spellcheck', $renderedTag);
        $this->assertStringContainsString('style', $renderedTag);
        $this->assertStringContainsString('tabindex', $renderedTag);
        $this->assertStringContainsString('title', $renderedTag);
        $this->assertStringContainsString('translate', $renderedTag);
        $this->assertStringContainsString('onblur', $renderedTag);
        $this->assertStringContainsString('onchange', $renderedTag);
        $this->assertStringContainsString('onclick', $renderedTag);
        $this->assertStringContainsString('oncontextmenu', $renderedTag);
        $this->assertStringContainsString('oncopy', $renderedTag);
        $this->assertStringContainsString('oncut', $renderedTag);
        $this->assertStringContainsString('ondblclick', $renderedTag);
        $this->assertStringContainsString('ondrag', $renderedTag);
        $this->assertStringContainsString('ondragend', $renderedTag);
        $this->assertStringContainsString('ondragenter', $renderedTag);
        $this->assertStringContainsString('ondragleave', $renderedTag);
        $this->assertStringContainsString('ondragover', $renderedTag);
        $this->assertStringContainsString('ondragstart', $renderedTag);
        $this->assertStringContainsString('ondrop', $renderedTag);
        $this->assertStringContainsString('onfocus', $renderedTag);
        $this->assertStringContainsString('oninput', $renderedTag);
        $this->assertStringContainsString('oninvalid', $renderedTag);
        $this->assertStringContainsString('onkeydown', $renderedTag);
        $this->assertStringContainsString('onkeypress', $renderedTag);
        $this->assertStringContainsString('onkeyup', $renderedTag);
        $this->assertStringContainsString('onmousedown', $renderedTag);
        $this->assertStringContainsString('onmousemove', $renderedTag);
        $this->assertStringContainsString('onmouseout', $renderedTag);
        $this->assertStringContainsString('onmouseover', $renderedTag);
        $this->assertStringContainsString('onmouseup', $renderedTag);
        $this->assertStringContainsString('onmousewheel', $renderedTag);
        $this->assertStringContainsString('onpaste', $renderedTag);
        $this->assertStringContainsString('onscroll', $renderedTag);
        $this->assertStringContainsString('onselect', $renderedTag);
        $this->assertStringContainsString('onwheel', $renderedTag);
        $this->assertStringContainsString('align', $renderedTag);
        $this->assertStringContainsString('bgcolor', $renderedTag);
        $this->assertStringContainsString('border', $renderedTag);
        $this->assertStringContainsString('color', $renderedTag);
    
    }

}
