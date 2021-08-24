<?php

namespace WabLab\Tests\Unit;

use WabLab\HtmlBuilder\HTML\Comment;
use WabLab\HtmlBuilder\HTML\Renderer\CommentRenderer;
use WabLab\HtmlBuilder\HTML\Renderer\HtmlTagRenderer;
use WabLab\HtmlBuilder\HTML\Renderer\RendererMapper;
use WabLab\HtmlBuilder\HTML\Tag\Div;
use WabLab\Tests\AbstractTestCase;

class HtmlCommentTest extends AbstractTestCase
{

    private RendererMapper $rendererMapper;

    public function setUp(): void
    {
        parent::setUp();
        $this->rendererMapper = new RendererMapper();
    }

    public function testCommentGettersAndSetters() {
        $comment = Comment::create()->setInnerText('test comment text');
        $this->assertEquals('test comment text', $comment->getInnerText());
    }

    public function testSingleLineCommentRenderer()
    {
        $comment = Comment::create()->setInnerText('test comment text');
        $commentRenderer = new CommentRenderer($this->rendererMapper, $comment);
        $renderedComment = $commentRenderer->render();
        $this->assertStringContainsString($comment->getInnerText(), $renderedComment);
        $this->assertStringNotContainsString("\n", $renderedComment);
    }

    public function testNestedCommentRenderer()
    {
        $div = Div::create()->addChild(
            Comment::create()->setInnerText('testComment')
        );
        $divRenderer = new HtmlTagRenderer($this->rendererMapper, $div);
        $this->assertStringContainsString('testComment', $divRenderer->render());
    }


    public function testMultiLineCommentRenderer()
    {
        $comment = Comment::create()->setInnerText("test comment text line 1\ntest comment text line 2");
        $commentRenderer = new CommentRenderer($this->rendererMapper, $comment);
        $renderedComment = $commentRenderer->render();
        $this->assertStringContainsString($comment->getInnerText(), $renderedComment);
        $this->assertStringContainsString("\n", $renderedComment);
    }

}
