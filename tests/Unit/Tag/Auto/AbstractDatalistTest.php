<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Datalist;

abstract class AbstractDatalistTest extends AbstractTestCase
{

    protected Datalist $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Datalist::create();
    
    }
    

}
