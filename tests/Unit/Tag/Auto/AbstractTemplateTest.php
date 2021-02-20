<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Template;

abstract class AbstractTemplateTest extends AbstractTestCase
{

    protected Template $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Template::create();
    
    }
    

}
