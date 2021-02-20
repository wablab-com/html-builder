<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Section;

abstract class AbstractSectionTest extends AbstractTestCase
{

    protected Section $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Section::create();
    
    }
    

}
