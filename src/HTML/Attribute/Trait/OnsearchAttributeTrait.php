<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnsearchAttributeTrait {

    /**
     * Script to be run when the user writes something in a search field (for <input="search">)
     * @return string
     */
    public function getOnsearch():string {
        return $this->getAttribute('onsearch');
    }

    /**
     * Script to be run when the user writes something in a search field (for <input="search">)
     * @return $this
     */
    public function setOnsearch(string $value):static {
        return $this->setAttribute('onsearch', $value);
    }
}
