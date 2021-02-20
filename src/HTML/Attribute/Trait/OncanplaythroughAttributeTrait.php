<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OncanplaythroughAttributeTrait {

    /**
     * Script to be run when a file can be played all the way to the end without pausing for buffering
     * @return string
     */
    public function getOncanplaythrough():string {
        return $this->getAttribute('oncanplaythrough');
    }

    /**
     * Script to be run when a file can be played all the way to the end without pausing for buffering
     * @return $this
     */
    public function setOncanplaythrough(string $value):static {
        return $this->setAttribute('oncanplaythrough', $value);
    }
}
