<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Caption;

abstract class AbstractCaptionTest extends AbstractTestCase
{

    protected Caption $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Caption::create();
    
    }
    

}
