<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Ruby;

abstract class AbstractRubyTest extends AbstractTestCase
{

    protected Ruby $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Ruby::create();
    
    }
    

}
