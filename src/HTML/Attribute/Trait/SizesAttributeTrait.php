<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait SizesAttributeTrait {

    /**
     * Specifies the size of the linked resource
     * @return string
     */
    public function getSizes():string {
        return $this->getAttribute('sizes');
    }

    /**
     * Specifies the size of the linked resource
     * @return $this
     */
    public function setSizes(string $value):static {
        return $this->setAttribute('sizes', $value);
    }
}
