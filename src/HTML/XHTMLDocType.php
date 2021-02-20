<?php

namespace WabLab\HTMLTemplateBuilder\HTML;

use WabLab\HTMLTemplateBuilder\Contract\IRenderableElement;

class XHTMLDocType extends Element implements IRenderableElement
{

    public function render() : string {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
    }

    public function __toString() : string
    {
        return $this->render();
    }

}