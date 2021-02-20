<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Frame;

abstract class AbstractFrameTest extends AbstractTestCase
{

    protected Frame $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Frame::create();
    
    }
    

}
