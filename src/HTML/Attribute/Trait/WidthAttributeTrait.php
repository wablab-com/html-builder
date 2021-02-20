<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait WidthAttributeTrait {

    /**
     * Specifies the width of the element
     * @return string
     */
    public function getWidth():string {
        return $this->getAttribute('width');
    }

    /**
     * Specifies the width of the element
     * @return $this
     */
    public function setWidth(string $value):static {
        return $this->setAttribute('width', $value);
    }
}

