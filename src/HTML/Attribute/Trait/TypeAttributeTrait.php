<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait TypeAttributeTrait {

    /**
     * Specifies the type of element
     * @return string
     */
    public function getType():string {
        return $this->getAttribute('type');
    }

    /**
     * Specifies the type of element
     * @return $this
     */
    public function setType(string $value):static {
        return $this->setAttribute('type', $value);
    }
}

