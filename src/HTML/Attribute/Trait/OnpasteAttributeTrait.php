<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnpasteAttributeTrait {

    /**
     * Script to be run when the user pastes some content in an element
     * @return string
     */
    public function getOnpaste():string {
        return $this->getAttribute('onpaste');
    }

    /**
     * Script to be run when the user pastes some content in an element
     * @return $this
     */
    public function setOnpaste(string $value):static {
        return $this->setAttribute('onpaste', $value);
    }
}

