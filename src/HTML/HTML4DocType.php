<?php

namespace WabLab\HtmlBuilder\HTML;

use WabLab\HtmlBuilder\Contract\IHtmlDocType;
use WabLab\HtmlBuilder\Contract\IRenderableElement;

class HTML4DocType extends Element implements IRenderableElement, IHtmlDocType
{

    public function __toString() : string
    {
        return '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
    }

}