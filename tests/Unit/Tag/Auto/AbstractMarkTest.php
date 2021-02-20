<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Mark;

abstract class AbstractMarkTest extends AbstractTestCase
{

    protected Mark $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Mark::create();
    
    }
    

}
