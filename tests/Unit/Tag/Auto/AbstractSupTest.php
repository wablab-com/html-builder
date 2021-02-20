<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Sup;

abstract class AbstractSupTest extends AbstractTestCase
{

    protected Sup $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Sup::create();
    
    }
    

}
