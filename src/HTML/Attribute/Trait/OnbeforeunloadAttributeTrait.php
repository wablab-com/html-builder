<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnbeforeunloadAttributeTrait {

    /**
     * Script to be run when the document is about to be unloaded
     * @return string
     */
    public function getOnbeforeunload():string {
        return $this->getAttribute('onbeforeunload');
    }

    /**
     * Script to be run when the document is about to be unloaded
     * @return $this
     */
    public function setOnbeforeunload(string $value):static {
        return $this->setAttribute('onbeforeunload', $value);
    }
}

