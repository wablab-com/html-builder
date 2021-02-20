<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnsubmitAttributeTrait {

    /**
     * Script to be run when a form is submitted
     * @return string
     */
    public function getOnsubmit():string {
        return $this->getAttribute('onsubmit');
    }

    /**
     * Script to be run when a form is submitted
     * @return $this
     */
    public function setOnsubmit(string $value):static {
        return $this->setAttribute('onsubmit', $value);
    }
}

