<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Bdi;

abstract class AbstractBdiTest extends AbstractTestCase
{

    protected Bdi $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Bdi::create();
    
    }
    

}
