<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait RowspanAttributeTrait {

    /**
     * Specifies the number of rows a table cell should span
     * @return string
     */
    public function getRowspan():string {
        return $this->getAttribute('rowspan');
    }

    /**
     * Specifies the number of rows a table cell should span
     * @return $this
     */
    public function setRowspan(string $value):static {
        return $this->setAttribute('rowspan', $value);
    }
}

