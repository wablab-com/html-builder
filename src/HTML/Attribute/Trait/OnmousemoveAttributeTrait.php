<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnmousemoveAttributeTrait {

    /**
     * Script to be run as long as the  mouse pointer is moving over an element
     * @return string
     */
    public function getOnmousemove():string {
        return $this->getAttribute('onmousemove');
    }

    /**
     * Script to be run as long as the  mouse pointer is moving over an element
     * @return $this
     */
    public function setOnmousemove(string $value):static {
        return $this->setAttribute('onmousemove', $value);
    }
}

