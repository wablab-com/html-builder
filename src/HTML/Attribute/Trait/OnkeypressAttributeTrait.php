<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnkeypressAttributeTrait {

    /**
     * Script to be run when a user presses a key
     * @return string
     */
    public function getOnkeypress():string {
        return $this->getAttribute('onkeypress');
    }

    /**
     * Script to be run when a user presses a key
     * @return $this
     */
    public function setOnkeypress(string $value):static {
        return $this->setAttribute('onkeypress', $value);
    }
}
