<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnresizeAttributeTrait {

    /**
     * Script to be run when the browser window is being resized.
     * @return string
     */
    public function getOnresize():string {
        return $this->getAttribute('onresize');
    }

    /**
     * Script to be run when the browser window is being resized.
     * @return $this
     */
    public function setOnresize(string $value):static {
        return $this->setAttribute('onresize', $value);
    }
}

