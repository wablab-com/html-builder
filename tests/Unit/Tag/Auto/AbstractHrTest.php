<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Hr;

abstract class AbstractHrTest extends AbstractTestCase
{

    protected Hr $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Hr::create();
    
    }
    

}
