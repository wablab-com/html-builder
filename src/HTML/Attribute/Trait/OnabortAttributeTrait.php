<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnabortAttributeTrait {

    /**
     * Script to be run on abort
     * @return string
     */
    public function getOnabort():string {
        return $this->getAttribute('onabort');
    }

    /**
     * Script to be run on abort
     * @return $this
     */
    public function setOnabort(string $value):static {
        return $this->setAttribute('onabort', $value);
    }
}
