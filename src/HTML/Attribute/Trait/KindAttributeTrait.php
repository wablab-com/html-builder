<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait KindAttributeTrait {

    /**
     * Specifies the kind of text track
     * @return string
     */
    public function getKind():string {
        return $this->getAttribute('kind');
    }

    /**
     * Specifies the kind of text track
     * @return $this
     */
    public function setKind(string $value):static {
        return $this->setAttribute('kind', $value);
    }
}
