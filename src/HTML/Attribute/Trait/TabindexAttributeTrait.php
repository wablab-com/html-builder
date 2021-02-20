<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait TabindexAttributeTrait {

    /**
     * Specifies the tabbing order of an element
     * @return string
     */
    public function getTabindex():string {
        return $this->getAttribute('tabindex');
    }

    /**
     * Specifies the tabbing order of an element
     * @return $this
     */
    public function setTabindex(string $value):static {
        return $this->setAttribute('tabindex', $value);
    }
}

