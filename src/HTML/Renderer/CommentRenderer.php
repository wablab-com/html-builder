<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;


use WabLab\HtmlBuilder\HTML\Comment;

class CommentRenderer extends AbstractRenderer
{

    /**
     * @var Comment
     */
    private Comment $comment;

    public function __construct(RendererMapper $rendererMapper, Comment $comment, int $indentation = 0, $maxLineWords = 0)
    {
        parent::__construct($rendererMapper, $indentation);
        $this->comment = $comment;
    }

    //
    // LEVEL 0
    //
    public function render(): string
    {
        if (strrpos($this->comment->getInnerText(), "\n")) {
            return $this->renderMultiLineComment();
        }
        return $this->renderOneLineComment();
    }

    //
    // LEVEL 1
    //
    protected function renderMultiLineComment(): string
    {
        $escapedComment = $this->escape($this->comment->getInnerText());

        $commentCode = "<!--\n" .
            $escapedComment .
            "\n//-->"; // This prevents JavaScript from executing the --> tag.

        return $this->indent($this->indentation, $commentCode);
    }

    protected function renderOneLineComment(): string
    {
        $escapedComment = $this->escape($this->comment->getInnerText());
        $escapedComment = str_replace("\n", '. ', $escapedComment);

        return $this->indent($this->indentation, "<!-- {$escapedComment} -->");
    }

    //
    // LEVEL 2
    //
    protected function escape(string $comment)
    {
        $escaped = str_replace("\r", '', $comment);
        $escaped = str_replace("-->", '-- >', $escaped); // escape
        return $escaped;
    }

}