<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait DirnameAttributeTrait {

    /**
     * Specifies that the text direction will be submitted
     * @return string
     */
    public function getDirname():string {
        return $this->getAttribute('dirname');
    }

    /**
     * Specifies that the text direction will be submitted
     * @return $this
     */
    public function setDirname(string $value):static {
        return $this->setAttribute('dirname', $value);
    }
}

