<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait UsemapAttributeTrait {

    /**
     * Specifies an image as a client-side image map
     * @return string
     */
    public function getUsemap():string {
        return $this->getAttribute('usemap');
    }

    /**
     * Specifies an image as a client-side image map
     * @return $this
     */
    public function setUsemap(string $value):static {
        return $this->setAttribute('usemap', $value);
    }
}
