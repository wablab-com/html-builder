<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnsuspendAttributeTrait {

    /**
     * Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason
     * @return string
     */
    public function getOnsuspend():string {
        return $this->getAttribute('onsuspend');
    }

    /**
     * Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason
     * @return $this
     */
    public function setOnsuspend(string $value):static {
        return $this->setAttribute('onsuspend', $value);
    }
}

