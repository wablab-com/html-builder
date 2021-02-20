<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait DeferAttributeTrait {

    /**
     * Specifies that the script is executed when the page has finished parsing (only for external scripts)
     * @return string
     */
    public function getDefer():string {
        return $this->getAttribute('defer');
    }

    /**
     * Specifies that the script is executed when the page has finished parsing (only for external scripts)
     * @return $this
     */
    public function setDefer(string $value):static {
        return $this->setAttribute('defer', $value);
    }
}
