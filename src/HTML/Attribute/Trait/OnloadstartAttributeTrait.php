<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnloadstartAttributeTrait {

    /**
     * Script to be run just as the file begins to load before anything is actually loaded
     * @return string
     */
    public function getOnloadstart():string {
        return $this->getAttribute('onloadstart');
    }

    /**
     * Script to be run just as the file begins to load before anything is actually loaded
     * @return $this
     */
    public function setOnloadstart(string $value):static {
        return $this->setAttribute('onloadstart', $value);
    }
}
