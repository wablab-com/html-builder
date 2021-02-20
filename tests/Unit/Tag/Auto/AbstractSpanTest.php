<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Span;

abstract class AbstractSpanTest extends AbstractTestCase
{

    protected Span $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Span::create();
    
    }
    

}
