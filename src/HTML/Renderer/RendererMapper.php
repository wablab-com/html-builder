<?php

namespace WabLab\HtmlBuilder\HTML\Renderer;

use WabLab\HtmlBuilder\Contract\IRenderableElement;

class RendererMapper
{
    protected $map = [];

    public function register(string $type, $rendererClass) {
        $this->map[$type] = $rendererClass;
    }

    public function mapRenderableElement(IRenderableElement $element) {
	if(isset($this->map[get_class($component)])) {
            return $this->map[get_class($component)];
        }
        foreach($this->map as $type => $rendererClass) {
            if(is_subclass_of($element, $type)) {
                return $rendererClass;
            }
        }
        return null;
    }
}
