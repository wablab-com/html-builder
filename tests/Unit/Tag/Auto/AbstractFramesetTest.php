<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Frameset;

abstract class AbstractFramesetTest extends AbstractTestCase
{

    protected Frameset $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Frameset::create();
    
    }
    

}
