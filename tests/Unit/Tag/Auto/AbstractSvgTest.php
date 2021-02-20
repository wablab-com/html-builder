<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Svg;

abstract class AbstractSvgTest extends AbstractTestCase
{

    protected Svg $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Svg::create();
    
    }
    

}
