<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnpagehideAttributeTrait {

    /**
     * Script to be run when a user navigates away from a page
     * @return string
     */
    public function getOnpagehide():string {
        return $this->getAttribute('onpagehide');
    }

    /**
     * Script to be run when a user navigates away from a page
     * @return $this
     */
    public function setOnpagehide(string $value):static {
        return $this->setAttribute('onpagehide', $value);
    }
}

