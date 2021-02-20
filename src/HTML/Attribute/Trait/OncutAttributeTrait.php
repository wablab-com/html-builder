<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OncutAttributeTrait {

    /**
     * Script to be run when the content of the element is being cut
     * @return string
     */
    public function getOncut():string {
        return $this->getAttribute('oncut');
    }

    /**
     * Script to be run when the content of the element is being cut
     * @return $this
     */
    public function setOncut(string $value):static {
        return $this->setAttribute('oncut', $value);
    }
}
