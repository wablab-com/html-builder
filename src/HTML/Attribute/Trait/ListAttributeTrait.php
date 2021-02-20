<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ListAttributeTrait {

    /**
     * Refers to a <datalist> element that contains pre-defined options for an <input> element
     * @return string
     */
    public function getList():string {
        return $this->getAttribute('list');
    }

    /**
     * Refers to a <datalist> element that contains pre-defined options for an <input> element
     * @return $this
     */
    public function setList(string $value):static {
        return $this->setAttribute('list', $value);
    }
}

