<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Input;

abstract class AbstractInputTest extends AbstractTestCase
{

    protected Input $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Input::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setAccept('accept');
        $this->tagObj->setAlt('alt');
        $this->tagObj->setAutocomplete('autocomplete');
        $this->tagObj->setAutofocus('autofocus');
        $this->tagObj->setChecked('checked');
        $this->tagObj->setDirname('dirname');
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setForm('form');
        $this->tagObj->setFormaction('formaction');
        $this->tagObj->setHeight('height');
        $this->tagObj->setList('list');
        $this->tagObj->setMax('max');
        $this->tagObj->setMaxlength('maxlength');
        $this->tagObj->setMin('min');
        $this->tagObj->setMultiple('multiple');
        $this->tagObj->setName('name');
        $this->tagObj->setOnload('onload');
        $this->tagObj->setOnsearch('onsearch');
        $this->tagObj->setPattern('pattern');
        $this->tagObj->setPlaceholder('placeholder');
        $this->tagObj->setReadonly('readonly');
        $this->tagObj->setRequired('required');
        $this->tagObj->setSize('size');
        $this->tagObj->setSrc('src');
        $this->tagObj->setStep('step');
        $this->tagObj->setType('type');
        $this->tagObj->setValue('value');
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
    
        $this->assertEquals('accept', $this->tagObj->getAccept('accept'));
        $this->assertEquals('alt', $this->tagObj->getAlt('alt'));
        $this->assertEquals('autocomplete', $this->tagObj->getAutocomplete('autocomplete'));
        $this->assertEquals('autofocus', $this->tagObj->getAutofocus('autofocus'));
        $this->assertEquals('checked', $this->tagObj->getChecked('checked'));
        $this->assertEquals('dirname', $this->tagObj->getDirname('dirname'));
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('form', $this->tagObj->getForm('form'));
        $this->assertEquals('formaction', $this->tagObj->getFormaction('formaction'));
        $this->assertEquals('height', $this->tagObj->getHeight('height'));
        $this->assertEquals('list', $this->tagObj->getList('list'));
        $this->assertEquals('max', $this->tagObj->getMax('max'));
        $this->assertEquals('maxlength', $this->tagObj->getMaxlength('maxlength'));
        $this->assertEquals('min', $this->tagObj->getMin('min'));
        $this->assertEquals('multiple', $this->tagObj->getMultiple('multiple'));
        $this->assertEquals('name', $this->tagObj->getName('name'));
        $this->assertEquals('onload', $this->tagObj->getOnload('onload'));
        $this->assertEquals('onsearch', $this->tagObj->getOnsearch('onsearch'));
        $this->assertEquals('pattern', $this->tagObj->getPattern('pattern'));
        $this->assertEquals('placeholder', $this->tagObj->getPlaceholder('placeholder'));
        $this->assertEquals('readonly', $this->tagObj->getReadonly('readonly'));
        $this->assertEquals('required', $this->tagObj->getRequired('required'));
        $this->assertEquals('size', $this->tagObj->getSize('size'));
        $this->assertEquals('src', $this->tagObj->getSrc('src'));
        $this->assertEquals('step', $this->tagObj->getStep('step'));
        $this->assertEquals('type', $this->tagObj->getType('type'));
        $this->assertEquals('value', $this->tagObj->getValue('value'));
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