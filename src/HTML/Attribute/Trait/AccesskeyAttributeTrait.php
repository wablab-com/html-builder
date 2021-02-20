<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AccesskeyAttributeTrait {

    /**
     * Specifies a shortcut key to activate/focus an element
     * @return string
     */
    public function getAccesskey():string {
        return $this->getAttribute('accesskey');
    }

    /**
     * Specifies a shortcut key to activate/focus an element
     * @return $this
     */
    public function setAccesskey(string $value):static {
        return $this->setAttribute('accesskey', $value);
    }
}

