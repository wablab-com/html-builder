<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\P;

abstract class AbstractPTest extends AbstractTestCase
{

    protected P $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = P::create();
    
    }
    

}
