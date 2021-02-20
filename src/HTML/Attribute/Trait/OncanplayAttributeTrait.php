<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OncanplayAttributeTrait {

    /**
     * Script to be run when a file is ready to start playing (when it has buffered enough to begin)
     * @return string
     */
    public function getOncanplay():string {
        return $this->getAttribute('oncanplay');
    }

    /**
     * Script to be run when a file is ready to start playing (when it has buffered enough to begin)
     * @return $this
     */
    public function setOncanplay(string $value):static {
        return $this->setAttribute('oncanplay', $value);
    }
}
