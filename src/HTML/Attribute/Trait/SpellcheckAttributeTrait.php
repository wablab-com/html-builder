<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait SpellcheckAttributeTrait {

    /**
     * Specifies whether the element is to have its spelling and grammar checked or not
     * @return string
     */
    public function getSpellcheck():string {
        return $this->getAttribute('spellcheck');
    }

    /**
     * Specifies whether the element is to have its spelling and grammar checked or not
     * @return $this
     */
    public function setSpellcheck(string $value):static {
        return $this->setAttribute('spellcheck', $value);
    }
}

