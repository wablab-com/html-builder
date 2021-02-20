<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait BgcolorAttributeTrait {

    /**
     * Specifies the background color of an element. Use CSS instead
     * @return string
     */
    public function getBgcolor():string {
        return $this->getAttribute('bgcolor');
    }

    /**
     * Specifies the background color of an element. Use CSS instead
     * @return $this
     */
    public function setBgcolor(string $value):static {
        return $this->setAttribute('bgcolor', $value);
    }
}

