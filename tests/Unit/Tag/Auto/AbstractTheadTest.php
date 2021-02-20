<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Thead;

abstract class AbstractTheadTest extends AbstractTestCase
{

    protected Thead $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Thead::create();
    
    }
    

}
