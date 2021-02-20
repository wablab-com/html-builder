<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Aside;

abstract class AbstractAsideTest extends AbstractTestCase
{

    protected Aside $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Aside::create();
    
    }
    

}
