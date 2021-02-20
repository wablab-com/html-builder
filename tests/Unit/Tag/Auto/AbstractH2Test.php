<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\H2;

abstract class AbstractH2Test extends AbstractTestCase
{

    protected H2 $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = H2::create();
    
    }
    

}
