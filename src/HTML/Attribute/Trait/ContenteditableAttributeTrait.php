<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ContenteditableAttributeTrait {

    /**
     * Specifies whether the content of an element is editable or not
     * @return string
     */
    public function getContenteditable():string {
        return $this->getAttribute('contenteditable');
    }

    /**
     * Specifies whether the content of an element is editable or not
     * @return $this
     */
    public function setContenteditable(string $value):static {
        return $this->setAttribute('contenteditable', $value);
    }
}

