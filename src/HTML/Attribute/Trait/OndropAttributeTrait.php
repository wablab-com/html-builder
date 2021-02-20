<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OndropAttributeTrait {

    /**
     * Script to be run when dragged element is being dropped
     * @return string
     */
    public function getOndrop():string {
        return $this->getAttribute('ondrop');
    }

    /**
     * Script to be run when dragged element is being dropped
     * @return $this
     */
    public function setOndrop(string $value):static {
        return $this->setAttribute('ondrop', $value);
    }
}
