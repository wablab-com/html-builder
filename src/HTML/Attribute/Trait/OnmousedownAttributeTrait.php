<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnmousedownAttributeTrait {

    /**
     * Script to be run when a mouse button is pressed down on an element
     * @return string
     */
    public function getOnmousedown():string {
        return $this->getAttribute('onmousedown');
    }

    /**
     * Script to be run when a mouse button is pressed down on an element
     * @return $this
     */
    public function setOnmousedown(string $value):static {
        return $this->setAttribute('onmousedown', $value);
    }
}
