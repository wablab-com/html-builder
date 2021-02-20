<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OncontextmenuAttributeTrait {

    /**
     * Script to be run when a context menu is triggered
     * @return string
     */
    public function getOncontextmenu():string {
        return $this->getAttribute('oncontextmenu');
    }

    /**
     * Script to be run when a context menu is triggered
     * @return $this
     */
    public function setOncontextmenu(string $value):static {
        return $this->setAttribute('oncontextmenu', $value);
    }
}

