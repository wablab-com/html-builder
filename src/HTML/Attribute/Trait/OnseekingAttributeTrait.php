<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnseekingAttributeTrait {

    /**
     * Script to be run when the seeking attribute is set to true indicating that seeking is active
     * @return string
     */
    public function getOnseeking():string {
        return $this->getAttribute('onseeking');
    }

    /**
     * Script to be run when the seeking attribute is set to true indicating that seeking is active
     * @return $this
     */
    public function setOnseeking(string $value):static {
        return $this->setAttribute('onseeking', $value);
    }
}

