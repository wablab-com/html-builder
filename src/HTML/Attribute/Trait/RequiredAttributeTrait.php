<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait RequiredAttributeTrait {

    /**
     * Specifies that the element must be filled out before submitting the form
     * @return string
     */
    public function getRequired():string {
        return $this->getAttribute('required');
    }

    /**
     * Specifies that the element must be filled out before submitting the form
     * @return $this
     */
    public function setRequired(string $value):static {
        return $this->setAttribute('required', $value);
    }
}
