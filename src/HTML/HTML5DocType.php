<?php

namespace WabLab\HtmlBuilder\HTML;

use WabLab\HtmlBuilder\Contract\IRenderableElement;

class HTML5DocType extends Element implements IRenderableElement
{

    public function render() : string
    {
        return '<!DOCTYPE html>';
    }

    public function __toString() : string
    {
        return $this->render();
    }

}