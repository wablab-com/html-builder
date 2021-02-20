<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\B;

abstract class AbstractBTest extends AbstractTestCase
{

    protected B $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = B::create();
    
    }
    

}
