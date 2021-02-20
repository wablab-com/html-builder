<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Header;

abstract class AbstractHeaderTest extends AbstractTestCase
{

    protected Header $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Header::create();
    
    }
    

}
