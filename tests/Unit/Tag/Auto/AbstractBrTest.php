<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Br;

abstract class AbstractBrTest extends AbstractTestCase
{

    protected Br $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Br::create();
    
    }
    

}
