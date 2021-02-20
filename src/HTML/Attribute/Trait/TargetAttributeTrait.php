<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait TargetAttributeTrait {

    /**
     * Specifies the target for where to open the linked document or where to submit the form
     * @return string
     */
    public function getTarget():string {
        return $this->getAttribute('target');
    }

    /**
     * Specifies the target for where to open the linked document or where to submit the form
     * @return $this
     */
    public function setTarget(string $value):static {
        return $this->setAttribute('target', $value);
    }
}

