<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OpenAttributeTrait {

    /**
     * Specifies that the details should be visible (open) to the user
     * @return string
     */
    public function getOpen():string {
        return $this->getAttribute('open');
    }

    /**
     * Specifies that the details should be visible (open) to the user
     * @return $this
     */
    public function setOpen(string $value):static {
        return $this->setAttribute('open', $value);
    }
}
