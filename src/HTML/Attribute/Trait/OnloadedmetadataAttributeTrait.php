<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnloadedmetadataAttributeTrait {

    /**
     * Script to be run when meta data (like dimensions and duration) are loaded
     * @return string
     */
    public function getOnloadedmetadata():string {
        return $this->getAttribute('onloadedmetadata');
    }

    /**
     * Script to be run when meta data (like dimensions and duration) are loaded
     * @return $this
     */
    public function setOnloadedmetadata(string $value):static {
        return $this->setAttribute('onloadedmetadata', $value);
    }
}
