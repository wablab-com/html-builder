<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Dt;

abstract class AbstractDtTest extends AbstractTestCase
{

    protected Dt $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Dt::create();
    
    }
    

}
