<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Basefont;

abstract class AbstractBasefontTest extends AbstractTestCase
{

    protected Basefont $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Basefont::create();
    
    }
    

}
