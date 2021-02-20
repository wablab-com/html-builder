<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Applet;

abstract class AbstractAppletTest extends AbstractTestCase
{

    protected Applet $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Applet::create();
    
    }
    

}
