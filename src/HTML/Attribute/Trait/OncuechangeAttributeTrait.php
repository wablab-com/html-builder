<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OncuechangeAttributeTrait {

    /**
     * Script to be run when the cue changes in a <track> element
     * @return string
     */
    public function getOncuechange():string {
        return $this->getAttribute('oncuechange');
    }

    /**
     * Script to be run when the cue changes in a <track> element
     * @return $this
     */
    public function setOncuechange(string $value):static {
        return $this->setAttribute('oncuechange', $value);
    }
}

