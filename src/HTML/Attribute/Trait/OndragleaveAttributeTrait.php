<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndragleaveAttributeTrait {

    /**
     * Script to be run when an element leaves a valid drop target
     * @return string
     */
    public function getOndragleave():string {
        return $this->getAttribute('ondragleave');
    }

    /**
     * Script to be run when an element leaves a valid drop target
     * @return $this
     */
    public function setOndragleave(string $value):static {
        return $this->setAttribute('ondragleave', $value);
    }
}

