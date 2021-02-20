<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait FormAttributeTrait {

    /**
     * Specifies the name of the form the element belongs to
     * @return string
     */
    public function getForm():string {
        return $this->getAttribute('form');
    }

    /**
     * Specifies the name of the form the element belongs to
     * @return $this
     */
    public function setForm(string $value):static {
        return $this->setAttribute('form', $value);
    }
}

