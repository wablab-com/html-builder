<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnmouseupAttributeTrait {

    /**
     * Script to be run when a mouse button is released over an element
     * @return string
     */
    public function getOnmouseup():string {
        return $this->getAttribute('onmouseup');
    }

    /**
     * Script to be run when a mouse button is released over an element
     * @return $this
     */
    public function setOnmouseup(string $value):static {
        return $this->setAttribute('onmouseup', $value);
    }
}

