<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ColsAttributeTrait {

    /**
     * Specifies the visible width of a text area
     * @return string
     */
    public function getCols():string {
        return $this->getAttribute('cols');
    }

    /**
     * Specifies the visible width of a text area
     * @return $this
     */
    public function setCols(string $value):static {
        return $this->setAttribute('cols', $value);
    }
}
