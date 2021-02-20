<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait MaxAttributeTrait {

    /**
     * Specifies the maximum value
     * @return string
     */
    public function getMax():string {
        return $this->getAttribute('max');
    }

    /**
     * Specifies the maximum value
     * @return $this
     */
    public function setMax(string $value):static {
        return $this->setAttribute('max', $value);
    }
}
