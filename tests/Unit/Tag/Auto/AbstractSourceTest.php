<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\AbstractTag;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Tag\Source;

abstract class AbstractSourceTest extends AbstractTestCase
{

    protected Source $tagObj;
    

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Source::create();
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setMedia('media');
        $this->tagObj->setSizes('sizes');
        $this->tagObj->setSrc('src');
        $this->tagObj->setSrcset('srcset');
        $this->tagObj->setType('type');
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
    
        $this->assertEquals('media', $this->tagObj->getMedia('media'));
        $this->assertEquals('sizes', $this->tagObj->getSizes('sizes'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('srcset', $this->tagObj->getSrcset('srcset'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
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
        $this->tagObj->setMedia('media');
        $this->tagObj->setSizes('sizes');
        $this->tagObj->setSrc('src');
        $this->tagObj->setSrcset('srcset');
        $this->tagObj->setType('type');
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
    
        $this->assertStringContainsString('<source', $renderedTag);
        $this->assertStringContainsString('media', $renderedTag);
        $this->assertStringContainsString('sizes', $renderedTag);
        $this->assertStringContainsString('src', $renderedTag);
        $this->assertStringContainsString('srcset', $renderedTag);
        $this->assertStringContainsString('type', $renderedTag);
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
