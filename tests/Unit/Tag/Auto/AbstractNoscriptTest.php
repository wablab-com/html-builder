<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Noscript;

abstract class AbstractNoscriptTest extends AbstractTestCase
{

    protected Noscript $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Noscript::create();
    
    }
    

}
