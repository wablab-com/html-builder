<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HighAttributeTrait {

    /**
     * Specifies the range that is considered to be a high value
     * @return string
     */
    public function getHigh():string {
        return $this->getAttribute('high');
    }

    /**
     * Specifies the range that is considered to be a high value
     * @return $this
     */
    public function setHigh(string $value):static {
        return $this->setAttribute('high', $value);
    }
}

