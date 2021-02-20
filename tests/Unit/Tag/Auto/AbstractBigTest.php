<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Big;

abstract class AbstractBigTest extends AbstractTestCase
{

    protected Big $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Big::create();
    
    }
    

}
