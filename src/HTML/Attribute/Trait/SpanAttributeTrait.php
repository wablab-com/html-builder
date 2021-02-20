<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait SpanAttributeTrait {

    /**
     * Specifies the number of columns to span
     * @return string
     */
    public function getSpan():string {
        return $this->getAttribute('span');
    }

    /**
     * Specifies the number of columns to span
     * @return $this
     */
    public function setSpan(string $value):static {
        return $this->setAttribute('span', $value);
    }
}
