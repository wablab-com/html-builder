<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait WrapAttributeTrait {

    /**
     * Specifies how the text in a text area is to be wrapped when submitted in a form
     * @return string
     */
    public function getWrap():string {
        return $this->getAttribute('wrap');
    }

    /**
     * Specifies how the text in a text area is to be wrapped when submitted in a form
     * @return $this
     */
    public function setWrap(string $value):static {
        return $this->setAttribute('wrap', $value);
    }
}
