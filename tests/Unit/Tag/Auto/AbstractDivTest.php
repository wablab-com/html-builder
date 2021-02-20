<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Div;

abstract class AbstractDivTest extends AbstractTestCase
{

    protected Div $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Div::create();
    
    }
    

}
