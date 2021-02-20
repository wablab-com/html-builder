<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Dd;

abstract class AbstractDdTest extends AbstractTestCase
{

    protected Dd $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Dd::create();
    
    }
    

}
