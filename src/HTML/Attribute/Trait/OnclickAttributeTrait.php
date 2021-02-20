<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnclickAttributeTrait {

    /**
     * Script to be run when the element is being clicked
     * @return string
     */
    public function getOnclick():string {
        return $this->getAttribute('onclick');
    }

    /**
     * Script to be run when the element is being clicked
     * @return $this
     */
    public function setOnclick(string $value):static {
        return $this->setAttribute('onclick', $value);
    }
}

