<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AcceptAttributeTrait {

    /**
     * Specifies the types of files that the server accepts (only for type="file")
     * @return string
     */
    public function getAccept():string {
        return $this->getAttribute('accept');
    }

    /**
     * Specifies the types of files that the server accepts (only for type="file")
     * @return $this
     */
    public function setAccept(string $value):static {
        return $this->setAttribute('accept', $value);
    }
}

