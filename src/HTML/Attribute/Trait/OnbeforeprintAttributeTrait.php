<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnbeforeprintAttributeTrait {

    /**
     * Script to be run before the document is printed
     * @return string
     */
    public function getOnbeforeprint():string {
        return $this->getAttribute('onbeforeprint');
    }

    /**
     * Script to be run before the document is printed
     * @return $this
     */
    public function setOnbeforeprint(string $value):static {
        return $this->setAttribute('onbeforeprint', $value);
    }
}

