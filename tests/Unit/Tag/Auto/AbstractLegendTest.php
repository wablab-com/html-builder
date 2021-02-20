<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Legend;

abstract class AbstractLegendTest extends AbstractTestCase
{

    protected Legend $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Legend::create();
    
    }
    

}
