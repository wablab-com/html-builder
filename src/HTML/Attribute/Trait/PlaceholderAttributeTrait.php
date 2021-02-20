<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait PlaceholderAttributeTrait {

    /**
     * Specifies a short hint that describes the expected value of the element
     * @return string
     */
    public function getPlaceholder():string {
        return $this->getAttribute('placeholder');
    }

    /**
     * Specifies a short hint that describes the expected value of the element
     * @return $this
     */
    public function setPlaceholder(string $value):static {
        return $this->setAttribute('placeholder', $value);
    }
}
