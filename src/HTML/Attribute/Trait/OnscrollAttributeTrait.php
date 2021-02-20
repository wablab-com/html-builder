<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnscrollAttributeTrait {

    /**
     * Script to be run when an element's scrollbar is being scrolled
     * @return string
     */
    public function getOnscroll():string {
        return $this->getAttribute('onscroll');
    }

    /**
     * Script to be run when an element's scrollbar is being scrolled
     * @return $this
     */
    public function setOnscroll(string $value):static {
        return $this->setAttribute('onscroll', $value);
    }
}
