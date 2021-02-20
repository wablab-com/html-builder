<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Kbd;

abstract class AbstractKbdTest extends AbstractTestCase
{

    protected Kbd $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Kbd::create();
    
    }
    

}
