<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnonlineAttributeTrait {

    /**
     * Script to be run when the browser starts to work online
     * @return string
     */
    public function getOnonline():string {
        return $this->getAttribute('ononline');
    }

    /**
     * Script to be run when the browser starts to work online
     * @return $this
     */
    public function setOnonline(string $value):static {
        return $this->setAttribute('ononline', $value);
    }
}
