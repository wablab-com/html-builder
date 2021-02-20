<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait ActionAttributeTrait {

    /**
     * Specifies where to send the form-data when a form is submitted
     * @return string
     */
    public function getAction():string {
        return $this->getAttribute('action');
    }

    /**
     * Specifies where to send the form-data when a form is submitted
     * @return $this
     */
    public function setAction(string $value):static {
        return $this->setAttribute('action', $value);
    }
}

