<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnprogressAttributeTrait {

    /**
     * Script to be run when the browser is in the process of getting the media data
     * @return string
     */
    public function getOnprogress():string {
        return $this->getAttribute('onprogress');
    }

    /**
     * Script to be run when the browser is in the process of getting the media data
     * @return $this
     */
    public function setOnprogress(string $value):static {
        return $this->setAttribute('onprogress', $value);
    }
}
