<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\H4;

abstract class AbstractH4Test extends AbstractTestCase
{

    protected H4 $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = H4::create();
    
    }
    

}
