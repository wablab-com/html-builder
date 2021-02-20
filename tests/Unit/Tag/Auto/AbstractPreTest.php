<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Pre;

abstract class AbstractPreTest extends AbstractTestCase
{

    protected Pre $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Pre::create();
    
    }
    

}
