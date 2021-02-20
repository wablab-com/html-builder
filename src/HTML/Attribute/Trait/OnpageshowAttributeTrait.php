<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnpageshowAttributeTrait {

    /**
     * Script to be run when a user navigates to a page
     * @return string
     */
    public function getOnpageshow():string {
        return $this->getAttribute('onpageshow');
    }

    /**
     * Script to be run when a user navigates to a page
     * @return $this
     */
    public function setOnpageshow(string $value):static {
        return $this->setAttribute('onpageshow', $value);
    }
}
