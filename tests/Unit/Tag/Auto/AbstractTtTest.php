<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Tt;

abstract class AbstractTtTest extends AbstractTestCase
{

    protected Tt $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Tt::create();
    
    }
    

}
