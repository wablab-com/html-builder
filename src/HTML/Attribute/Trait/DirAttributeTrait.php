<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait DirAttributeTrait {

    /**
     * Specifies the text direction for the content in an element
     * @return string
     */
    public function getDir():string {
        return $this->getAttribute('dir');
    }

    /**
     * Specifies the text direction for the content in an element
     * @return $this
     */
    public function setDir(string $value):static {
        return $this->setAttribute('dir', $value);
    }
}

