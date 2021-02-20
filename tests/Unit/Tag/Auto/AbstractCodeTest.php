<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Code;

abstract class AbstractCodeTest extends AbstractTestCase
{

    protected Code $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Code::create();
    
    }
    

}
