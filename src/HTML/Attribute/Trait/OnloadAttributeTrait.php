<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnloadAttributeTrait {

    /**
     * Script to be run when the element is finished loading
     * @return string
     */
    public function getOnload():string {
        return $this->getAttribute('onload');
    }

    /**
     * Script to be run when the element is finished loading
     * @return $this
     */
    public function setOnload(string $value):static {
        return $this->setAttribute('onload', $value);
    }
}

