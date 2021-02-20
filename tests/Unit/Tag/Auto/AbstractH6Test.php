<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\H6;

abstract class AbstractH6Test extends AbstractTestCase
{

    protected H6 $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = H6::create();
    
    }
    

}
