<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnchangeAttributeTrait {

    /**
     * Script to be run when the value of the element is changed
     * @return string
     */
    public function getOnchange():string {
        return $this->getAttribute('onchange');
    }

    /**
     * Script to be run when the value of the element is changed
     * @return $this
     */
    public function setOnchange(string $value):static {
        return $this->setAttribute('onchange', $value);
    }
}
