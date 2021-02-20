<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnratechangeAttributeTrait {

    /**
     * Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode).
     * @return string
     */
    public function getOnratechange():string {
        return $this->getAttribute('onratechange');
    }

    /**
     * Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode).
     * @return $this
     */
    public function setOnratechange(string $value):static {
        return $this->setAttribute('onratechange', $value);
    }
}

