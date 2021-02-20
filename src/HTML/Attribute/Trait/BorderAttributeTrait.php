<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait BorderAttributeTrait {

    /**
     * Specifies the width of the border of an element. Use CSS instead
     * @return string
     */
    public function getBorder():string {
        return $this->getAttribute('border');
    }

    /**
     * Specifies the width of the border of an element. Use CSS instead
     * @return $this
     */
    public function setBorder(string $value):static {
        return $this->setAttribute('border', $value);
    }
}
