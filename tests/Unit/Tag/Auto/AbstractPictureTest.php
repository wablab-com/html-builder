<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Picture;

abstract class AbstractPictureTest extends AbstractTestCase
{

    protected Picture $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Picture::create();
    
    }
    

}
