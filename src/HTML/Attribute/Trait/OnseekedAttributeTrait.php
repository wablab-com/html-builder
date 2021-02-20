<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnseekedAttributeTrait {

    /**
     * Script to be run when the seeking attribute is set to false indicating that seeking has ended
     * @return string
     */
    public function getOnseeked():string {
        return $this->getAttribute('onseeked');
    }

    /**
     * Script to be run when the seeking attribute is set to false indicating that seeking has ended
     * @return $this
     */
    public function setOnseeked(string $value):static {
        return $this->setAttribute('onseeked', $value);
    }
}
