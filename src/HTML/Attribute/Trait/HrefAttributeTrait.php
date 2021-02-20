<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HrefAttributeTrait {

    /**
     * Specifies the URL of the page the link goes to
     * @return string
     */
    public function getHref():string {
        return $this->getAttribute('href');
    }

    /**
     * Specifies the URL of the page the link goes to
     * @return $this
     */
    public function setHref(string $value):static {
        return $this->setAttribute('href', $value);
    }
}

