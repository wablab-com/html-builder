<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Data;

abstract class AbstractDataTest extends AbstractTestCase
{

    protected Data $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Data::create();
    
    }
    

}
