<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HiddenAttributeTrait {

    /**
     * Specifies that an element is not yet, or is no longer, relevant
     * @return string
     */
    public function getHidden():string {
        return $this->getAttribute('hidden');
    }

    /**
     * Specifies that an element is not yet, or is no longer, relevant
     * @return $this
     */
    public function setHidden(string $value):static {
        return $this->setAttribute('hidden', $value);
    }
}

