<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait DefaultAttributeTrait {

    /**
     * Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate
     * @return string
     */
    public function getDefault():string {
        return $this->getAttribute('default');
    }

    /**
     * Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate
     * @return $this
     */
    public function setDefault(string $value):static {
        return $this->setAttribute('default', $value);
    }
}
