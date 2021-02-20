<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndragstartAttributeTrait {

    /**
     * Script to be run at the start of a drag operation
     * @return string
     */
    public function getOndragstart():string {
        return $this->getAttribute('ondragstart');
    }

    /**
     * Script to be run at the start of a drag operation
     * @return $this
     */
    public function setOndragstart(string $value):static {
        return $this->setAttribute('ondragstart', $value);
    }
}

