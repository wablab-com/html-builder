<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait SrclangAttributeTrait {

    /**
     * Specifies the language of the track text data (required if kind="subtitles")
     * @return string
     */
    public function getSrclang():string {
        return $this->getAttribute('srclang');
    }

    /**
     * Specifies the language of the track text data (required if kind="subtitles")
     * @return $this
     */
    public function setSrclang(string $value):static {
        return $this->setAttribute('srclang', $value);
    }
}

