<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OntoggleAttributeTrait {

    /**
     * Script to be run when the user opens or closes the <details> element
     * @return string
     */
    public function getOntoggle():string {
        return $this->getAttribute('ontoggle');
    }

    /**
     * Script to be run when the user opens or closes the <details> element
     * @return $this
     */
    public function setOntoggle(string $value):static {
        return $this->setAttribute('ontoggle', $value);
    }
}
