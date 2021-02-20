<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnofflineAttributeTrait {

    /**
     * Script to be run when the browser starts to work offline
     * @return string
     */
    public function getOnoffline():string {
        return $this->getAttribute('onoffline');
    }

    /**
     * Script to be run when the browser starts to work offline
     * @return $this
     */
    public function setOnoffline(string $value):static {
        return $this->setAttribute('onoffline', $value);
    }
}

