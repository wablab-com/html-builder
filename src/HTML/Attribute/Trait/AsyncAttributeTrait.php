<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AsyncAttributeTrait {

    /**
     * Specifies that the script is executed asynchronously (only for external scripts)
     * @return string
     */
    public function getAsync():string {
        return $this->getAttribute('async');
    }

    /**
     * Specifies that the script is executed asynchronously (only for external scripts)
     * @return $this
     */
    public function setAsync(string $value):static {
        return $this->setAttribute('async', $value);
    }
}

