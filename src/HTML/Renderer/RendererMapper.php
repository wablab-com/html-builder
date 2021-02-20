<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Renderer;

use WabLab\HTMLTemplateBuilder\Contract\IRenderableElement;

class RendererMapper
{
    protected $map = [];

    public function register(string $type, $rendererClass) {
        $this->map[$type] = $rendererClass;
    }

    public function map(string $type) {
        if(isset($this->map[$type])) {
            return $this->map[$type];
        }
        null;
    }

    public function mapRenderableElement(IRenderableElement $element) {
        foreach($this->map as $type => $rendererClass) {
            if(is_subclass_of($element, $type)) {
                return $rendererClass;
            }
        }
        return null;
    }
}