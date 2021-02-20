<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait LabelAttributeTrait {

    /**
     * Specifies the title of the text track
     * @return string
     */
    public function getLabel():string {
        return $this->getAttribute('label');
    }

    /**
     * Specifies the title of the text track
     * @return $this
     */
    public function setLabel(string $value):static {
        return $this->setAttribute('label', $value);
    }
}
