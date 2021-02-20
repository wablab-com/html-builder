<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Wbr;

abstract class AbstractWbrTest extends AbstractTestCase
{

    protected Wbr $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Wbr::create();
    
    }
    

}
