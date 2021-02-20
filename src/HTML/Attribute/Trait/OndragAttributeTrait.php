<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndragAttributeTrait {

    /**
     * Script to be run when the element is being dragged
     * @return string
     */
    public function getOndrag():string {
        return $this->getAttribute('ondrag');
    }

    /**
     * Script to be run when the element is being dragged
     * @return $this
     */
    public function setOndrag(string $value):static {
        return $this->setAttribute('ondrag', $value);
    }
}

