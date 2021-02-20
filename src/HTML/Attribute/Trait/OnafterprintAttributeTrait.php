<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnafterprintAttributeTrait {

    /**
     * Script to be run after the document is printed
     * @return string
     */
    public function getOnafterprint():string {
        return $this->getAttribute('onafterprint');
    }

    /**
     * Script to be run after the document is printed
     * @return $this
     */
    public function setOnafterprint(string $value):static {
        return $this->setAttribute('onafterprint', $value);
    }
}

