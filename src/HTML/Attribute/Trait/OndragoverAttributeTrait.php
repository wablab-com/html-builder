<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndragoverAttributeTrait {

    /**
     * Script to be run when an element is being dragged over a valid drop target
     * @return string
     */
    public function getOndragover():string {
        return $this->getAttribute('ondragover');
    }

    /**
     * Script to be run when an element is being dragged over a valid drop target
     * @return $this
     */
    public function setOndragover(string $value):static {
        return $this->setAttribute('ondragover', $value);
    }
}

