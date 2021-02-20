<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait LowAttributeTrait {

    /**
     * Specifies the range that is considered to be a low value
     * @return string
     */
    public function getLow():string {
        return $this->getAttribute('low');
    }

    /**
     * Specifies the range that is considered to be a low value
     * @return $this
     */
    public function setLow(string $value):static {
        return $this->setAttribute('low', $value);
    }
}
