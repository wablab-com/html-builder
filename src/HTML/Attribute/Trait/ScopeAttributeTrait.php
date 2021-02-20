<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ScopeAttributeTrait {

    /**
     * Specifies whether a header cell is a header for a column, row, or group of columns or rows
     * @return string
     */
    public function getScope():string {
        return $this->getAttribute('scope');
    }

    /**
     * Specifies whether a header cell is a header for a column, row, or group of columns or rows
     * @return $this
     */
    public function setScope(string $value):static {
        return $this->setAttribute('scope', $value);
    }
}
