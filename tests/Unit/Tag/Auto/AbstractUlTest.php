<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Ul;

abstract class AbstractUlTest extends AbstractTestCase
{

    protected Ul $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Ul::create();
    
    }
    

}
