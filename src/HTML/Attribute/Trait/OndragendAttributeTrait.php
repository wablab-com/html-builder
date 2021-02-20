<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndragendAttributeTrait {

    /**
     * Script to be run at the end of a drag operation
     * @return string
     */
    public function getOndragend():string {
        return $this->getAttribute('ondragend');
    }

    /**
     * Script to be run at the end of a drag operation
     * @return $this
     */
    public function setOndragend(string $value):static {
        return $this->setAttribute('ondragend', $value);
    }
}

