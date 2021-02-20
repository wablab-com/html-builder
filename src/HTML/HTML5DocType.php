<?php

namespace WabLab\HTMLTemplateBuilder\HTML;

use WabLab\HTMLTemplateBuilder\Contract\IRenderableElement;

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