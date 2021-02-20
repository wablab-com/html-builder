<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnpopstateAttributeTrait {

    /**
     * Script to be run when the window's history changes.
     * @return string
     */
    public function getOnpopstate():string {
        return $this->getAttribute('onpopstate');
    }

    /**
     * Script to be run when the window's history changes.
     * @return $this
     */
    public function setOnpopstate(string $value):static {
        return $this->setAttribute('onpopstate', $value);
    }
}

