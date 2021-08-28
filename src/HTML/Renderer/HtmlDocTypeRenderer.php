<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;

use WabLab\HtmlBuilder\Contract\IHtmlDocType;
use WabLab\HtmlBuilder\Contract\IRenderingContext;

class HtmlDocTypeRenderer extends AbstractRenderer
{

    /**
     * @var IHtmlDocType
     */
    private IHtmlDocType $docType;

    public function __construct(RendererMapper $rendererMapper, IHtmlDocType $docType, int $indentation = 0)
    {
        parent::__construct($rendererMapper, $indentation);

        $this->docType = $docType;
    }

    //
    // LEVEL 0
    //
    public function render(?IRenderingContext $context = null):string
    {
        return "{$this->docType}";
    }

}