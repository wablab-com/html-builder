<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ValueAttributeTrait {

    /**
     * Specifies the value of the element
     * @return string
     */
    public function getValue():string {
        return $this->getAttribute('value');
    }

    /**
     * Specifies the value of the element
     * @return $this
     */
    public function setValue(string $value):static {
        return $this->setAttribute('value', $value);
    }
}
