<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Summary;

abstract class AbstractSummaryTest extends AbstractTestCase
{

    protected Summary $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Summary::create();
    
    }
    

}
