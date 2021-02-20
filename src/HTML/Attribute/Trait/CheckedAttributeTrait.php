<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait CheckedAttributeTrait {

    /**
     * Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio")
     * @return string
     */
    public function getChecked():string {
        return $this->getAttribute('checked');
    }

    /**
     * Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio")
     * @return $this
     */
    public function setChecked(string $value):static {
        return $this->setAttribute('checked', $value);
    }
}
