<?php

namespace WabLab\Tests\Unit\Tag\Auto;

use WabLab\Tests\AbstractTestCase;
use WabLab\HtmlBuilder\HTML\Tag\Optgroup;

abstract class AbstractOptgroupTest extends AbstractTestCase
{

    protected Optgroup $tagObj;

    function setUp(): void
    {
        parent::setUp();
        $this->tagObj = Optgroup::create();
    
    }
    

    public function testClassSettersGetters() {
        $this->tagObj->setDisabled('disabled');
        $this->tagObj->setLabel('label');
    
        $this->assertEquals('disabled', $this->tagObj->getDisabled('disabled'));
        $this->assertEquals('label', $this->tagObj->getLabel('label'));
    
    }

}
