<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait IsmapAttributeTrait {

    /**
     * Specifies an image as a server-side image map
     * @return string
     */
    public function getIsmap():string {
        return $this->getAttribute('ismap');
    }

    /**
     * Specifies an image as a server-side image map
     * @return $this
     */
    public function setIsmap(string $value):static {
        return $this->setAttribute('ismap', $value);
    }
}
