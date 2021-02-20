<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait SizeAttributeTrait {

    /**
     * Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>)
     * @return string
     */
    public function getSize():string {
        return $this->getAttribute('size');
    }

    /**
     * Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>)
     * @return $this
     */
    public function setSize(string $value):static {
        return $this->setAttribute('size', $value);
    }
}

