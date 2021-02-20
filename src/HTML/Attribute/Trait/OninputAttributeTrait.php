<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OninputAttributeTrait {

    /**
     * Script to be run when the element gets user input
     * @return string
     */
    public function getOninput():string {
        return $this->getAttribute('oninput');
    }

    /**
     * Script to be run when the element gets user input
     * @return $this
     */
    public function setOninput(string $value):static {
        return $this->setAttribute('oninput', $value);
    }
}
