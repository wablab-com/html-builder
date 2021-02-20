<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnunloadAttributeTrait {

    /**
     * Script to be run when a page has unloaded (or the browser window has been closed)
     * @return string
     */
    public function getOnunload():string {
        return $this->getAttribute('onunload');
    }

    /**
     * Script to be run when a page has unloaded (or the browser window has been closed)
     * @return $this
     */
    public function setOnunload(string $value):static {
        return $this->setAttribute('onunload', $value);
    }
}

