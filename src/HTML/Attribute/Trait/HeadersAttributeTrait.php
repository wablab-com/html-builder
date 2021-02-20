<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait HeadersAttributeTrait {

    /**
     * Specifies one or more headers cells a cell is related to
     * @return string
     */
    public function getHeaders():string {
        return $this->getAttribute('headers');
    }

    /**
     * Specifies one or more headers cells a cell is related to
     * @return $this
     */
    public function setHeaders(string $value):static {
        return $this->setAttribute('headers', $value);
    }
}

