<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AutofocusAttributeTrait {

    /**
     * Specifies that the element should automatically get focus when the page loads
     * @return string
     */
    public function getAutofocus():string {
        return $this->getAttribute('autofocus');
    }

    /**
     * Specifies that the element should automatically get focus when the page loads
     * @return $this
     */
    public function setAutofocus(string $value):static {
        return $this->setAttribute('autofocus', $value);
    }
}

