<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Textarea;

abstract class AbstractTextareaTest extends AbstractTestCase
{

    protected Textarea $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Textarea::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAutofocus('autofocus');
        $this->tagObj->setCols('cols');
        $this->tagObj->setDirname('dirname');
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setMaxlength('maxlength');
        $this->tagObj->setName('name');
        $this->tagObj->setPlaceholder('placeholder');
        $this->tagObj->setReadonly('readonly');
        $this->tagObj->setRequired('required');
        $this->tagObj->setRows('rows');
        $this->tagObj->setWrap('wrap');
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
    
        $this->assertEquals('autofocus', $this->tagObj->getAutofocus('autofocus'));
        $this->assertEquals('cols', $this->tagObj->getCols('cols'));
        $this->assertEquals('dirname', $this->tagObj->getDirname('dirname'));
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('maxlength', $this->tagObj->getMaxlength('maxlength'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('placeholder', $this->tagObj->getPlaceholder('placeholder'));
        $this->assertEquals('readonly', $this->tagObj->getReadonly('readonly'));
        $this->assertEquals('required', $this->tagObj->getRequired('required'));
        $this->assertEquals('rows', $this->tagObj->getRows('rows'));
        $this->assertEquals('wrap', $this->tagObj->getWrap('wrap'));
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
