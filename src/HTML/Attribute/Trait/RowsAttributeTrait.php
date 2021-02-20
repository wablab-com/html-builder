<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait RowsAttributeTrait {

    /**
     * Specifies the visible number of lines in a text area
     * @return string
     */
    public function getRows():string {
        return $this->getAttribute('rows');
    }

    /**
     * Specifies the visible number of lines in a text area
     * @return $this
     */
    public function setRows(string $value):static {
        return $this->setAttribute('rows', $value);
    }
}
