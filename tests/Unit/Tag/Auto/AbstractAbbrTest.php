<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Abbr;

abstract class AbstractAbbrTest extends AbstractTestCase
{

    protected Abbr $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Abbr::create();
    
    }
    

}
