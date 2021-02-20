<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\H3;

abstract class AbstractH3Test extends AbstractTestCase
{

    protected H3 $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = H3::create();
    
    }
    

}
