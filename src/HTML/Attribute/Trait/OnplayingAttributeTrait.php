<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnplayingAttributeTrait {

    /**
     * Script to be run when the media has started playing
     * @return string
     */
    public function getOnplaying():string {
        return $this->getAttribute('onplaying');
    }

    /**
     * Script to be run when the media has started playing
     * @return $this
     */
    public function setOnplaying(string $value):static {
        return $this->setAttribute('onplaying', $value);
    }
}
