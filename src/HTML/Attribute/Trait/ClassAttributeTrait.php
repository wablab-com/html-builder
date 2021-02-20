<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ClassAttributeTrait {

    /**
     * Specifies one or more classnames for an element (refers to a class in a style sheet)
     * @return string
     */
    public function getClass():string {
        return $this->getAttribute('class');
    }

    /**
     * Specifies one or more classnames for an element (refers to a class in a style sheet)
     * @return $this
     */
    public function setClass(string $value):static {
        return $this->setAttribute('class', $value);
    }
}

