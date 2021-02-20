<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait DisabledAttributeTrait {

    /**
     * Specifies that the specified element/group of elements should be disabled
     * @return string
     */
    public function getDisabled():string {
        return $this->getAttribute('disabled');
    }

    /**
     * Specifies that the specified element/group of elements should be disabled
     * @return $this
     */
    public function setDisabled(string $value):static {
        return $this->setAttribute('disabled', $value);
    }
}
