<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Article;

abstract class AbstractArticleTest extends AbstractTestCase
{

    protected Article $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Article::create();
    
    }
    

}
