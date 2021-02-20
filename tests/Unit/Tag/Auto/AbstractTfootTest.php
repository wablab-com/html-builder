<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Tfoot;

abstract class AbstractTfootTest extends AbstractTestCase
{

    protected Tfoot $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Tfoot::create();
    
    }
    

}
