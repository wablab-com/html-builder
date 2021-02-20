<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Figcaption;

abstract class AbstractFigcaptionTest extends AbstractTestCase
{

    protected Figcaption $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Figcaption::create();
    
    }
    

}
