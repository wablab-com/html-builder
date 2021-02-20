<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait RelAttributeTrait {

    /**
     * Specifies the relationship between the current document and the linked document
     * @return string
     */
    public function getRel():string {
        return $this->getAttribute('rel');
    }

    /**
     * Specifies the relationship between the current document and the linked document
     * @return $this
     */
    public function setRel(string $value):static {
        return $this->setAttribute('rel', $value);
    }
}

