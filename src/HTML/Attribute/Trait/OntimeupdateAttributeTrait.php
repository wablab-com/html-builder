<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OntimeupdateAttributeTrait {

    /**
     * Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media)
     * @return string
     */
    public function getOntimeupdate():string {
        return $this->getAttribute('ontimeupdate');
    }

    /**
     * Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media)
     * @return $this
     */
    public function setOntimeupdate(string $value):static {
        return $this->setAttribute('ontimeupdate', $value);
    }
}

