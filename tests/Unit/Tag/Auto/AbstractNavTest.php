<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Nav;

abstract class AbstractNavTest extends AbstractTestCase
{

    protected Nav $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Nav::create();
    
    }
    

}
