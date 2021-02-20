<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Noframes;

abstract class AbstractNoframesTest extends AbstractTestCase
{

    protected Noframes $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Noframes::create();
    
    }
    

}
