<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnstorageAttributeTrait {

    /**
     * Script to be run when a Web Storage area is updated
     * @return string
     */
    public function getOnstorage():string {
        return $this->getAttribute('onstorage');
    }

    /**
     * Script to be run when a Web Storage area is updated
     * @return $this
     */
    public function setOnstorage(string $value):static {
        return $this->setAttribute('onstorage', $value);
    }
}

