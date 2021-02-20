<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ColspanAttributeTrait {

    /**
     * Specifies the number of columns a table cell should span
     * @return string
     */
    public function getColspan():string {
        return $this->getAttribute('colspan');
    }

    /**
     * Specifies the number of columns a table cell should span
     * @return $this
     */
    public function setColspan(string $value):static {
        return $this->setAttribute('colspan', $value);
    }
}

