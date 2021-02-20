<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ForAttributeTrait {

    /**
     * Specifies which form element(s) a label/calculation is bound to
     * @return string
     */
    public function getFor():string {
        return $this->getAttribute('for');
    }

    /**
     * Specifies which form element(s) a label/calculation is bound to
     * @return $this
     */
    public function setFor(string $value):static {
        return $this->setAttribute('for', $value);
    }
}
