<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Figure;

abstract class AbstractFigureTest extends AbstractTestCase
{

    protected Figure $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Figure::create();
    
    }
    

}
