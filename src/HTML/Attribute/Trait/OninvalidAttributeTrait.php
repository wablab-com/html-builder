<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OninvalidAttributeTrait {

    /**
     * Script to be run when the element is invalid
     * @return string
     */
    public function getOninvalid():string {
        return $this->getAttribute('oninvalid');
    }

    /**
     * Script to be run when the element is invalid
     * @return $this
     */
    public function setOninvalid(string $value):static {
        return $this->setAttribute('oninvalid', $value);
    }
}
