<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\S;

abstract class AbstractSTest extends AbstractTestCase
{

    protected S $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = S::create();
    
    }
    

}
