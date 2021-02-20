<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnfocusAttributeTrait {

    /**
     * Script to be run when the element gets focus
     * @return string
     */
    public function getOnfocus():string {
        return $this->getAttribute('onfocus');
    }

    /**
     * Script to be run when the element gets focus
     * @return $this
     */
    public function setOnfocus(string $value):static {
        return $this->setAttribute('onfocus', $value);
    }
}

