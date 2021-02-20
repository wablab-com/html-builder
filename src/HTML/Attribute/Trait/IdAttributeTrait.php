<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait IdAttributeTrait {

    /**
     * Specifies a unique id for an element
     * @return string
     */
    public function getId():string {
        return $this->getAttribute('id');
    }

    /**
     * Specifies a unique id for an element
     * @return $this
     */
    public function setId(string $value):static {
        return $this->setAttribute('id', $value);
    }
}
