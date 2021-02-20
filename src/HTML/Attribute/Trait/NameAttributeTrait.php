<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait NameAttributeTrait {

    /**
     * Specifies the name of the element
     * @return string
     */
    public function getName():string {
        return $this->getAttribute('name');
    }

    /**
     * Specifies the name of the element
     * @return $this
     */
    public function setName(string $value):static {
        return $this->setAttribute('name', $value);
    }
}
