<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnselectAttributeTrait {

    /**
     * Script to be run when the element gets selected
     * @return string
     */
    public function getOnselect():string {
        return $this->getAttribute('onselect');
    }

    /**
     * Script to be run when the element gets selected
     * @return $this
     */
    public function setOnselect(string $value):static {
        return $this->setAttribute('onselect', $value);
    }
}
