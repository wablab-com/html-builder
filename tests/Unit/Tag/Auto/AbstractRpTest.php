<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Rp;

abstract class AbstractRpTest extends AbstractTestCase
{

    protected Rp $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Rp::create();
    
    }
    

}
