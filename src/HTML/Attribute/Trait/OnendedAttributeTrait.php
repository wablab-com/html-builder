<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnendedAttributeTrait {

    /**
     * Script to be run when the media has reach the end (a useful event for messages like "thanks for listening")
     * @return string
     */
    public function getOnended():string {
        return $this->getAttribute('onended');
    }

    /**
     * Script to be run when the media has reach the end (a useful event for messages like "thanks for listening")
     * @return $this
     */
    public function setOnended(string $value):static {
        return $this->setAttribute('onended', $value);
    }
}
