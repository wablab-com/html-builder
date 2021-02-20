<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OncopyAttributeTrait {

    /**
     * Script to be run when the content of the element is being copied
     * @return string
     */
    public function getOncopy():string {
        return $this->getAttribute('oncopy');
    }

    /**
     * Script to be run when the content of the element is being copied
     * @return $this
     */
    public function setOncopy(string $value):static {
        return $this->setAttribute('oncopy', $value);
    }
}

