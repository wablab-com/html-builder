<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait DataAttributeTrait {

    /**
     * Used to store custom data private to the page or application
     * @return string
     */
    public function getData():string {
        return $this->getAttribute('data-*');
    }

    /**
     * Used to store custom data private to the page or application
     * @return $this
     */
    public function setData(string $value):static {
        return $this->setAttribute('data-*', $value);
    }
}

