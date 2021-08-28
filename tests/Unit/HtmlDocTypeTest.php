<?php

namespace WabLab\Tests\Unit;

use WabLab\HtmlBuilder\Contract\IHtmlDocType;
use WabLab\HtmlBuilder\HTML\HTML4DocType;
use WabLab\HtmlBuilder\HTML\HTML5DocType;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlDocTypeRenderer;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;
use WabLab\HtmlBuilder\HTML\XHTMLDocType;
use WabLab\Tests\AbstractTestCase;

class HtmlDocTypeTest extends AbstractTestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testHtml5DockTypeRenderer()
    {
        $docType = new HTML5DocType();
        $renderer = new HtmlDocTypeRenderer($this->rendererMapper, $docType);
        $this->assertStringContainsString('<!DOCTYPE html>', $renderer->render());
    }

    public function testHtml4DockTypeRenderer()
    {
        $docType = new HTML4DocType();
        $renderer = new HtmlDocTypeRenderer($this->rendererMapper, $docType);
        $this->assertStringContainsString('HTML 4.01', $renderer->render());
    }

    public function testXHtmlDockTypeRenderer()
    {
        $docType = new XHTMLDocType();
        $renderer = new HtmlDocTypeRenderer($this->rendererMapper, $docType);
        $this->assertStringContainsString('XHTML 1.1', $renderer->render());
    }


}
