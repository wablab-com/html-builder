<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Sub;

abstract class AbstractSubTest extends AbstractTestCase
{

    protected Sub $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Sub::create();
    
    }
    

}
