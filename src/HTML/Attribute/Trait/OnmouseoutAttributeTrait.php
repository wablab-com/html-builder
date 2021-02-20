<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnmouseoutAttributeTrait {

    /**
     * Script to be run when a mouse pointer moves out of an element
     * @return string
     */
    public function getOnmouseout():string {
        return $this->getAttribute('onmouseout');
    }

    /**
     * Script to be run when a mouse pointer moves out of an element
     * @return $this
     */
    public function setOnmouseout(string $value):static {
        return $this->setAttribute('onmouseout', $value);
    }
}

