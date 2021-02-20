<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ReversedAttributeTrait {

    /**
     * Specifies that the list order should be descending (9,8,7...)
     * @return string
     */
    public function getReversed():string {
        return $this->getAttribute('reversed');
    }

    /**
     * Specifies that the list order should be descending (9,8,7...)
     * @return $this
     */
    public function setReversed(string $value):static {
        return $this->setAttribute('reversed', $value);
    }
}
