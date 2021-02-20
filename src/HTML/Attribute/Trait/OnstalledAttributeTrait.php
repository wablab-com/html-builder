<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnstalledAttributeTrait {

    /**
     * Script to be run when the browser is unable to fetch the media data for whatever reason
     * @return string
     */
    public function getOnstalled():string {
        return $this->getAttribute('onstalled');
    }

    /**
     * Script to be run when the browser is unable to fetch the media data for whatever reason
     * @return $this
     */
    public function setOnstalled(string $value):static {
        return $this->setAttribute('onstalled', $value);
    }
}
