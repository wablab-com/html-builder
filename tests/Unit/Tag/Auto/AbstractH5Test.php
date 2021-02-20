<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\H5;

abstract class AbstractH5Test extends AbstractTestCase
{

    protected H5 $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = H5::create();
    
    }
    

}
