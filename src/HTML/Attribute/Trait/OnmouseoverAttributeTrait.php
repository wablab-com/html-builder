<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnmouseoverAttributeTrait {

    /**
     * Script to be run when a mouse pointer moves over an element
     * @return string
     */
    public function getOnmouseover():string {
        return $this->getAttribute('onmouseover');
    }

    /**
     * Script to be run when a mouse pointer moves over an element
     * @return $this
     */
    public function setOnmouseover(string $value):static {
        return $this->setAttribute('onmouseover', $value);
    }
}
