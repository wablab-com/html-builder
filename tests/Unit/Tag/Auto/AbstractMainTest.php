<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Main;

abstract class AbstractMainTest extends AbstractTestCase
{

    protected Main $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Main::create();
    
    }
    

}
