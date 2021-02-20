<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\VarTag;

abstract class AbstractVarTest extends AbstractTestCase
{

    protected VarTag $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = VarTag::create();
    
    }
    

}
