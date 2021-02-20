<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait PreloadAttributeTrait {

    /**
     * Specifies if and how the author thinks the audio/video should be loaded when the page loads
     * @return string
     */
    public function getPreload():string {
        return $this->getAttribute('preload');
    }

    /**
     * Specifies if and how the author thinks the audio/video should be loaded when the page loads
     * @return $this
     */
    public function setPreload(string $value):static {
        return $this->setAttribute('preload', $value);
    }
}
