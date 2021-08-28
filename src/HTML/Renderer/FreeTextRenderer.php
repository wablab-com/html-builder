<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;


use WabLab\HtmlBuilder\Contract\IRenderingContext;
use WabLab\HtmlBuilder\HTML\Comment;
use WabLab\HtmlBuilder\HTML\FreeText;

class FreeTextRenderer extends AbstractRenderer
{

    private FreeText $freeText;

    public function __construct(RendererMapper $rendererMapper, FreeText $freeText, int $indentation = 0)
    {
        parent::__construct($rendererMapper, $indentation);
        $this->freeText = $freeText;
    }

    //
    // LEVEL 0
    //
    public function render(?IRenderingContext $context = null):string
    {
        return $this->indent($this->indentation, $this->freeText->getInnerText());
    }

}