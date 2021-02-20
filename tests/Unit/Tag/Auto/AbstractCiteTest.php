<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Cite;

abstract class AbstractCiteTest extends AbstractTestCase
{

    protected Cite $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Cite::create();
    
    }
    

}
