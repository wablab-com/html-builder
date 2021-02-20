<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait SrcAttributeTrait {

    /**
     * Specifies the URL of the media file
     * @return string
     */
    public function getSrc():string {
        return $this->getAttribute('src');
    }

    /**
     * Specifies the URL of the media file
     * @return $this
     */
    public function setSrc(string $value):static {
        return $this->setAttribute('src', $value);
    }
}
