<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait StepAttributeTrait {

    /**
     * Specifies the legal number intervals for an input field
     * @return string
     */
    public function getStep():string {
        return $this->getAttribute('step');
    }

    /**
     * Specifies the legal number intervals for an input field
     * @return $this
     */
    public function setStep(string $value):static {
        return $this->setAttribute('step', $value);
    }
}

