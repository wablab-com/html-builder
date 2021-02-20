<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnwheelAttributeTrait {

    /**
     * Script to be run when the mouse wheel rolls up or down over an element
     * @return string
     */
    public function getOnwheel():string {
        return $this->getAttribute('onwheel');
    }

    /**
     * Script to be run when the mouse wheel rolls up or down over an element
     * @return $this
     */
    public function setOnwheel(string $value):static {
        return $this->setAttribute('onwheel', $value);
    }
}
