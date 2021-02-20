<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Table;

abstract class AbstractTableTest extends AbstractTestCase
{

    protected Table $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Table::create();
    
    }
    

}
