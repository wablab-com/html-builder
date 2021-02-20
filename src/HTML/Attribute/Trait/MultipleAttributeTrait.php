<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait MultipleAttributeTrait {

    /**
     * Specifies that a user can enter more than one value
     * @return string
     */
    public function getMultiple():string {
        return $this->getAttribute('multiple');
    }

    /**
     * Specifies that a user can enter more than one value
     * @return $this
     */
    public function setMultiple(string $value):static {
        return $this->setAttribute('multiple', $value);
    }
}
