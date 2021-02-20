<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait MaxlengthAttributeTrait {

    /**
     * Specifies the maximum number of characters allowed in an element
     * @return string
     */
    public function getMaxlength():string {
        return $this->getAttribute('maxlength');
    }

    /**
     * Specifies the maximum number of characters allowed in an element
     * @return $this
     */
    public function setMaxlength(string $value):static {
        return $this->setAttribute('maxlength', $value);
    }
}

