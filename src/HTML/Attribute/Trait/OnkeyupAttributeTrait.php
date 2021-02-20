<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnkeyupAttributeTrait {

    /**
     * Script to be run when a user releases a key
     * @return string
     */
    public function getOnkeyup():string {
        return $this->getAttribute('onkeyup');
    }

    /**
     * Script to be run when a user releases a key
     * @return $this
     */
    public function setOnkeyup(string $value):static {
        return $this->setAttribute('onkeyup', $value);
    }
}

