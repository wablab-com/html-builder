<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnpauseAttributeTrait {

    /**
     * Script to be run when the media is paused either by the user or programmatically
     * @return string
     */
    public function getOnpause():string {
        return $this->getAttribute('onpause');
    }

    /**
     * Script to be run when the media is paused either by the user or programmatically
     * @return $this
     */
    public function setOnpause(string $value):static {
        return $this->setAttribute('onpause', $value);
    }
}
