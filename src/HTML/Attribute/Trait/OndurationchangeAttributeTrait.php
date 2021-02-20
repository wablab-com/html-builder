<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OndurationchangeAttributeTrait {

    /**
     * Script to be run when the length of the media changes
     * @return string
     */
    public function getOndurationchange():string {
        return $this->getAttribute('ondurationchange');
    }

    /**
     * Script to be run when the length of the media changes
     * @return $this
     */
    public function setOndurationchange(string $value):static {
        return $this->setAttribute('ondurationchange', $value);
    }
}
