<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Bdo;

abstract class AbstractBdoTest extends AbstractTestCase
{

    protected Bdo $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Bdo::create();
    
    }
    

}
