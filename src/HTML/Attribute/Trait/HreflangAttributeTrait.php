<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HreflangAttributeTrait {

    /**
     * Specifies the language of the linked document
     * @return string
     */
    public function getHreflang():string {
        return $this->getAttribute('hreflang');
    }

    /**
     * Specifies the language of the linked document
     * @return $this
     */
    public function setHreflang(string $value):static {
        return $this->setAttribute('hreflang', $value);
    }
}

