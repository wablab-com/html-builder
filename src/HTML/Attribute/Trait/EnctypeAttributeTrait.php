<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait EnctypeAttributeTrait {

    /**
     * Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
     * @return string
     */
    public function getEnctype():string {
        return $this->getAttribute('enctype');
    }

    /**
     * Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
     * @return $this
     */
    public function setEnctype(string $value):static {
        return $this->setAttribute('enctype', $value);
    }
}

