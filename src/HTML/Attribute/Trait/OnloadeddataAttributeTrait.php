<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnloadeddataAttributeTrait {

    /**
     * Script to be run when media data is loaded
     * @return string
     */
    public function getOnloadeddata():string {
        return $this->getAttribute('onloadeddata');
    }

    /**
     * Script to be run when media data is loaded
     * @return $this
     */
    public function setOnloadeddata(string $value):static {
        return $this->setAttribute('onloadeddata', $value);
    }
}
