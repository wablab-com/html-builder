<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait TitleAttributeTrait {

    /**
     * Specifies extra information about an element
     * @return string
     */
    public function getTitle():string {
        return $this->getAttribute('title');
    }

    /**
     * Specifies extra information about an element
     * @return $this
     */
    public function setTitle(string $value):static {
        return $this->setAttribute('title', $value);
    }
}

