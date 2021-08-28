<?php

namespace WabLab\Tests;

use PHPUnit\Framework\TestCase;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;

class AbstractTestCase extends TestCase
{
    protected RendererMapper $rendererMapper;

    public function setUp(): void
    {
        parent::setUp();
        $this->rendererMapper = new RendererMapper();
        //$this->setOutputCallback(function() {});
    }
}