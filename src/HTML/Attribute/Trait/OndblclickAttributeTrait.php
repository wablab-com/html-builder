<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OndblclickAttributeTrait {

    /**
     * Script to be run when the element is being double-clicked
     * @return string
     */
    public function getOndblclick():string {
        return $this->getAttribute('ondblclick');
    }

    /**
     * Script to be run when the element is being double-clicked
     * @return $this
     */
    public function setOndblclick(string $value):static {
        return $this->setAttribute('ondblclick', $value);
    }
}

