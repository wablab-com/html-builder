<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Rt;

abstract class AbstractRtTest extends AbstractTestCase
{

    protected Rt $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Rt::create();
    
    }
    

}
