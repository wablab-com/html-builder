<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndragenterAttributeTrait {

    /**
     * Script to be run when an element has been dragged to a valid drop target
     * @return string
     */
    public function getOndragenter():string {
        return $this->getAttribute('ondragenter');
    }

    /**
     * Script to be run when an element has been dragged to a valid drop target
     * @return $this
     */
    public function setOndragenter(string $value):static {
        return $this->setAttribute('ondragenter', $value);
    }
}

