<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnkeydownAttributeTrait {

    /**
     * Script to be run when a user is pressing a key
     * @return string
     */
    public function getOnkeydown():string {
        return $this->getAttribute('onkeydown');
    }

    /**
     * Script to be run when a user is pressing a key
     * @return $this
     */
    public function setOnkeydown(string $value):static {
        return $this->setAttribute('onkeydown', $value);
    }
}
