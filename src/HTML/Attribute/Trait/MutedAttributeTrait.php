<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait MutedAttributeTrait {

    /**
     * Specifies that the audio output of the video should be muted
     * @return string
     */
    public function getMuted():string {
        return $this->getAttribute('muted');
    }

    /**
     * Specifies that the audio output of the video should be muted
     * @return $this
     */
    public function setMuted(string $value):static {
        return $this->setAttribute('muted', $value);
    }
}
