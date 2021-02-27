<?php

namespace WabLab\HtmlBuilder\HTML;

use WabLab\HtmlBuilder\Contract\IHtmlDocType;
use WabLab\HtmlBuilder\Contract\IRenderableElement;

class XHTMLDocType extends Element implements IRenderableElement, IHtmlDocType
{

    public function __toString() : string
    {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
    }

}