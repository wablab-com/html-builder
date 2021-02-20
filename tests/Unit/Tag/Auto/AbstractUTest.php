<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\U;

abstract class AbstractUTest extends AbstractTestCase
{

    protected U $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = U::create();
    
    }
    

}
