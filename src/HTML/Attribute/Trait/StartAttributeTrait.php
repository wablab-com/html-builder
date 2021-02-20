<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait StartAttributeTrait {

    /**
     * Specifies the start value of an ordered list
     * @return string
     */
    public function getStart():string {
        return $this->getAttribute('start');
    }

    /**
     * Specifies the start value of an ordered list
     * @return $this
     */
    public function setStart(string $value):static {
        return $this->setAttribute('start', $value);
    }
}

