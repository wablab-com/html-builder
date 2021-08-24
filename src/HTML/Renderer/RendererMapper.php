<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;

use WabLab\HtmlBuilder\Contract\IHtmlDocType;
use WabLab\HtmlBuilder\Contract\IRenderableElement;
use WabLab\HtmlBuilder\HTML\Comment;
use WabLab\HtmlBuilder\HTML\Tag\AbstractTag;

class RendererMapper
{
    protected $map = [];

    public function __construct()
    {
        // initial map
        $this->register(AbstractTag::class, HtmlTagRenderer::class);
        $this->register(Comment::class, CommentRenderer::class);
        $this->register(IHtmlDocType::class, HtmlDocTypeRenderer::class);
    }

    public function register(string $type, $rendererClass) {
        $this->map[$type] = $rendererClass;
    }

    public function unRegister(string $type) {
        unset($this->map[$type]);
    }

    public function mapRenderableElement(IRenderableElement $element) {
	    if(isset($this->map[get_class($element)])) {
            return $this->map[get_class($element)];
        }
        foreach($this->map as $type => $rendererClass) {
            if(is_subclass_of($element, $type)) {
                return $rendererClass;
            }
        }
        return null;
    }
}
