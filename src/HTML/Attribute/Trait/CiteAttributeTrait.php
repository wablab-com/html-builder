<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait CiteAttributeTrait {

    /**
     * Specifies a URL which explains the quote/deleted/inserted text
     * @return string
     */
    public function getCite():string {
        return $this->getAttribute('cite');
    }

    /**
     * Specifies a URL which explains the quote/deleted/inserted text
     * @return $this
     */
    public function setCite(string $value):static {
        return $this->setAttribute('cite', $value);
    }
}
