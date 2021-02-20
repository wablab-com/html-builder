<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Dl;

abstract class AbstractDlTest extends AbstractTestCase
{

    protected Dl $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Dl::create();
    
    }
    

}
