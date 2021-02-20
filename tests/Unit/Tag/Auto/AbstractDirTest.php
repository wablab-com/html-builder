<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Dir;

abstract class AbstractDirTest extends AbstractTestCase
{

    protected Dir $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Dir::create();
    
    }
    

}
