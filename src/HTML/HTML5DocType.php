<?php

namespace WabLab\HtmlBuilder\HTML;

use WabLab\HtmlBuilder\Contract\IHtmlDocType;
use WabLab\HtmlBuilder\Contract\IRenderableElement;

class HTML5DocType extends Element implements IRenderableElement, IHtmlDocType
{

    public function __toString() : string
    {
        return '<!DOCTYPE html>';
    }

}