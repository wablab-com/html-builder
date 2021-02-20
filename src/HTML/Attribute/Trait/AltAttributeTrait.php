<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AltAttributeTrait {

    /**
     * Specifies an alternate text when the original element fails to display
     * @return string
     */
    public function getAlt():string {
        return $this->getAttribute('alt');
    }

    /**
     * Specifies an alternate text when the original element fails to display
     * @return $this
     */
    public function setAlt(string $value):static {
        return $this->setAttribute('alt', $value);
    }
}

