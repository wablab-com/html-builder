<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AcceptCharsetAttributeTrait {

    /**
     * Specifies the character encodings that are to be used for the form submission
     * @return string
     */
    public function getAcceptCharset():string {
        return $this->getAttribute('accept-charset');
    }

    /**
     * Specifies the character encodings that are to be used for the form submission
     * @return $this
     */
    public function setAcceptCharset(string $value):static {
        return $this->setAttribute('accept-charset', $value);
    }
}

