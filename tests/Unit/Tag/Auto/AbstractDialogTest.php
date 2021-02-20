<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Dialog;

abstract class AbstractDialogTest extends AbstractTestCase
{

    protected Dialog $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Dialog::create();
    
    }
    

}
