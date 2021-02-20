<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Strike;

abstract class AbstractStrikeTest extends AbstractTestCase
{

    protected Strike $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Strike::create();
    
    }
    

}
