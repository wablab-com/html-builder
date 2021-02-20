<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait MinAttributeTrait {

    /**
     * Specifies a minimum value
     * @return string
     */
    public function getMin():string {
        return $this->getAttribute('min');
    }

    /**
     * Specifies a minimum value
     * @return $this
     */
    public function setMin(string $value):static {
        return $this->setAttribute('min', $value);
    }
}
