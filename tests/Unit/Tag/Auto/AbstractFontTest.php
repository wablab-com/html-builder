<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Font;

abstract class AbstractFontTest extends AbstractTestCase
{

    protected Font $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Font::create();
    
    }
    

}
