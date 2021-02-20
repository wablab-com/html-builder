<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Samp;

abstract class AbstractSampTest extends AbstractTestCase
{

    protected Samp $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Samp::create();
    
    }
    

}
