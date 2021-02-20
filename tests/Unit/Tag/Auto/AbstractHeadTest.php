<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Head;

abstract class AbstractHeadTest extends AbstractTestCase
{

    protected Head $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Head::create();
    
    }
    

}
