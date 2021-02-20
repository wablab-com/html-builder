<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait CharsetAttributeTrait {

    /**
     * Specifies the character encoding
     * @return string
     */
    public function getCharset():string {
        return $this->getAttribute('charset');
    }

    /**
     * Specifies the character encoding
     * @return $this
     */
    public function setCharset(string $value):static {
        return $this->setAttribute('charset', $value);
    }
}
