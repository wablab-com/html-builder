<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnhashchangeAttributeTrait {

    /**
     * Script to be run when there has been changes to the anchor part of the a URL
     * @return string
     */
    public function getOnhashchange():string {
        return $this->getAttribute('onhashchange');
    }

    /**
     * Script to be run when there has been changes to the anchor part of the a URL
     * @return $this
     */
    public function setOnhashchange(string $value):static {
        return $this->setAttribute('onhashchange', $value);
    }
}
