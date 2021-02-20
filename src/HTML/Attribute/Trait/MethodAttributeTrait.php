<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait MethodAttributeTrait {

    /**
     * Specifies the HTTP method to use when sending form-data
     * @return string
     */
    public function getMethod():string {
        return $this->getAttribute('method');
    }

    /**
     * Specifies the HTTP method to use when sending form-data
     * @return $this
     */
    public function setMethod(string $value):static {
        return $this->setAttribute('method', $value);
    }
}
