<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnresetAttributeTrait {

    /**
     * Script to be run when a reset button in a form is clicked.
     * @return string
     */
    public function getOnreset():string {
        return $this->getAttribute('onreset');
    }

    /**
     * Script to be run when a reset button in a form is clicked.
     * @return $this
     */
    public function setOnreset(string $value):static {
        return $this->setAttribute('onreset', $value);
    }
}
