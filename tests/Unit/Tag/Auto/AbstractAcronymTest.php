<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Acronym;

abstract class AbstractAcronymTest extends AbstractTestCase
{

    protected Acronym $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Acronym::create();
    
    }
    

}
