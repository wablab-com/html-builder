<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnvolumechangeAttributeTrait {

    /**
     * Script to be run each time the volume of a video/audio has been changed
     * @return string
     */
    public function getOnvolumechange():string {
        return $this->getAttribute('onvolumechange');
    }

    /**
     * Script to be run each time the volume of a video/audio has been changed
     * @return $this
     */
    public function setOnvolumechange(string $value):static {
        return $this->setAttribute('onvolumechange', $value);
    }
}

