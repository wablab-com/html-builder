<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait StyleAttributeTrait {

    /**
     * Specifies an inline CSS style for an element
     * @return string
     */
    public function getStyle():string {
        return $this->getAttribute('style');
    }

    /**
     * Specifies an inline CSS style for an element
     * @return $this
     */
    public function setStyle(string $value):static {
        return $this->setAttribute('style', $value);
    }
}
