<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Em;

abstract class AbstractEmTest extends AbstractTestCase
{

    protected Em $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Em::create();
    
    }
    

}
