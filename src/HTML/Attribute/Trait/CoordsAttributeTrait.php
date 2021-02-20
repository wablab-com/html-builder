<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait CoordsAttributeTrait {

    /**
     * Specifies the coordinates of the area
     * @return string
     */
    public function getCoords():string {
        return $this->getAttribute('coords');
    }

    /**
     * Specifies the coordinates of the area
     * @return $this
     */
    public function setCoords(string $value):static {
        return $this->setAttribute('coords', $value);
    }
}

