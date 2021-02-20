<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Strong;

abstract class AbstractStrongTest extends AbstractTestCase
{

    protected Strong $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Strong::create();
    
    }
    

}
