<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnmousewheelAttributeTrait {

    /**
     * Script to be run when a mouse wheel is being scrolled over an element
     * @return string
     */
    public function getOnmousewheel():string {
        return $this->getAttribute('onmousewheel');
    }

    /**
     * Script to be run when a mouse wheel is being scrolled over an element
     * @return $this
     */
    public function setOnmousewheel(string $value):static {
        return $this->setAttribute('onmousewheel', $value);
    }
}
