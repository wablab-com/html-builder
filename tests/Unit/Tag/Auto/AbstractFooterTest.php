<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Footer;

abstract class AbstractFooterTest extends AbstractTestCase
{

    protected Footer $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Footer::create();
    
    }
    

}
