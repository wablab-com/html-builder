<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnerrorAttributeTrait {

    /**
     * Script to be run when an error occurs
     * @return string
     */
    public function getOnerror():string {
        return $this->getAttribute('onerror');
    }

    /**
     * Script to be run when an error occurs
     * @return $this
     */
    public function setOnerror(string $value):static {
        return $this->setAttribute('onerror', $value);
    }
}
