<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnplayAttributeTrait {

    /**
     * Script to be run when the media has started playing
     * @return string
     */
    public function getOnplay():string {
        return $this->getAttribute('onplay');
    }

    /**
     * Script to be run when the media has started playing
     * @return $this
     */
    public function setOnplay(string $value):static {
        return $this->setAttribute('onplay', $value);
    }
}

