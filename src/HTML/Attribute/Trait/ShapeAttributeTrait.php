<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ShapeAttributeTrait {

    /**
     * Specifies the shape of the area
     * @return string
     */
    public function getShape():string {
        return $this->getAttribute('shape');
    }

    /**
     * Specifies the shape of the area
     * @return $this
     */
    public function setShape(string $value):static {
        return $this->setAttribute('shape', $value);
    }
}
