<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnblurAttributeTrait {

    /**
     * Script to be run when the element loses focus
     * @return string
     */
    public function getOnblur():string {
        return $this->getAttribute('onblur');
    }

    /**
     * Script to be run when the element loses focus
     * @return $this
     */
    public function setOnblur(string $value):static {
        return $this->setAttribute('onblur', $value);
    }
}

