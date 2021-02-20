<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HeightAttributeTrait {

    /**
     * Specifies the height of the element
     * @return string
     */
    public function getHeight():string {
        return $this->getAttribute('height');
    }

    /**
     * Specifies the height of the element
     * @return $this
     */
    public function setHeight(string $value):static {
        return $this->setAttribute('height', $value);
    }
}

