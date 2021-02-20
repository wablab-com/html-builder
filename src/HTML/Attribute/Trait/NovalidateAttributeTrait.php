<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait NovalidateAttributeTrait {

    /**
     * Specifies that the form should not be validated when submitted
     * @return string
     */
    public function getNovalidate():string {
        return $this->getAttribute('novalidate');
    }

    /**
     * Specifies that the form should not be validated when submitted
     * @return $this
     */
    public function setNovalidate(string $value):static {
        return $this->setAttribute('novalidate', $value);
    }
}
