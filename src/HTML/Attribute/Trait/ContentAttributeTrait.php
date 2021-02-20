<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ContentAttributeTrait {

    /**
     * Gives the value associated with the http-equiv or name attribute
     * @return string
     */
    public function getContent():string {
        return $this->getAttribute('content');
    }

    /**
     * Gives the value associated with the http-equiv or name attribute
     * @return $this
     */
    public function setContent(string $value):static {
        return $this->setAttribute('content', $value);
    }
}

