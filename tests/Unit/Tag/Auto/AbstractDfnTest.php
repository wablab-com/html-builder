<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Dfn;

abstract class AbstractDfnTest extends AbstractTestCase
{

    protected Dfn $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Dfn::create();
    
    }
    

}
