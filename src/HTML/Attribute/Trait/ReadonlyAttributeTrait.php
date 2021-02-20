<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ReadonlyAttributeTrait {

    /**
     * Specifies that the element is read-only
     * @return string
     */
    public function getReadonly():string {
        return $this->getAttribute('readonly');
    }

    /**
     * Specifies that the element is read-only
     * @return $this
     */
    public function setReadonly(string $value):static {
        return $this->setAttribute('readonly', $value);
    }
}

