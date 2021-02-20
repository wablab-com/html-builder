<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Tr;

abstract class AbstractTrTest extends AbstractTestCase
{

    protected Tr $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Tr::create();
    
    }
    

}
