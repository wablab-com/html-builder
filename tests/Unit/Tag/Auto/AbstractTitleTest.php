<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Title;

abstract class AbstractTitleTest extends AbstractTestCase
{

    protected Title $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Title::create();
    
    }
    

}
