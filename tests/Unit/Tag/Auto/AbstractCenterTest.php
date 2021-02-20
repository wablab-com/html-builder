<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Center;

abstract class AbstractCenterTest extends AbstractTestCase
{

    protected Center $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Center::create();
    
    }
    

}
