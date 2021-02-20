<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait SrcsetAttributeTrait {

    /**
     * Specifies the URL of the image to use in different situations
     * @return string
     */
    public function getSrcset():string {
        return $this->getAttribute('srcset');
    }

    /**
     * Specifies the URL of the image to use in different situations
     * @return $this
     */
    public function setSrcset(string $value):static {
        return $this->setAttribute('srcset', $value);
    }
}
