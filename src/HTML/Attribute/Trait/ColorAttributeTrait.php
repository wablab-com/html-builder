<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ColorAttributeTrait {

    /**
     * Specifies the text color of an element. Use CSS instead
     * @return string
     */
    public function getColor():string {
        return $this->getAttribute('color');
    }

    /**
     * Specifies the text color of an element. Use CSS instead
     * @return $this
     */
    public function setColor(string $value):static {
        return $this->setAttribute('color', $value);
    }
}
