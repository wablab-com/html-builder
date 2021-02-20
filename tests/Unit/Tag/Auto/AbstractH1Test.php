<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\H1;

abstract class AbstractH1Test extends AbstractTestCase
{

    protected H1 $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = H1::create();
    
    }
    

}
