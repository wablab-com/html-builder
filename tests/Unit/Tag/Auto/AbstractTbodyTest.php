<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Tbody;

abstract class AbstractTbodyTest extends AbstractTestCase
{

    protected Tbody $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Tbody::create();
    
    }
    

}
