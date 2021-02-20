<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Address;

abstract class AbstractAddressTest extends AbstractTestCase
{

    protected Address $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Address::create();
    
    }
    

}
