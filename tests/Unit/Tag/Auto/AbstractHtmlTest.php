<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Html;

abstract class AbstractHtmlTest extends AbstractTestCase
{

    protected Html $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Html::create();
    
    }
    

}
