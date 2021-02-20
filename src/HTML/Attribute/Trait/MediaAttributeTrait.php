<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait MediaAttributeTrait {

    /**
     * Specifies what media/device the linked document is optimized for
     * @return string
     */
    public function getMedia():string {
        return $this->getAttribute('media');
    }

    /**
     * Specifies what media/device the linked document is optimized for
     * @return $this
     */
    public function setMedia(string $value):static {
        return $this->setAttribute('media', $value);
    }
}

