<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HttpEquivAttributeTrait {

    /**
     * Provides an HTTP header for the information/value of the content attribute
     * @return string
     */
    public function getHttpEquiv():string {
        return $this->getAttribute('http-equiv');
    }

    /**
     * Provides an HTTP header for the information/value of the content attribute
     * @return $this
     */
    public function setHttpEquiv(string $value):static {
        return $this->setAttribute('http-equiv', $value);
    }
}

