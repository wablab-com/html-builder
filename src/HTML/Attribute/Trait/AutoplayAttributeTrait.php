<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AutoplayAttributeTrait {

    /**
     * Specifies that the audio/video will start playing as soon as it is ready
     * @return string
     */
    public function getAutoplay():string {
        return $this->getAttribute('autoplay');
    }

    /**
     * Specifies that the audio/video will start playing as soon as it is ready
     * @return $this
     */
    public function setAutoplay(string $value):static {
        return $this->setAttribute('autoplay', $value);
    }
}

