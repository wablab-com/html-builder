<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait PatternAttributeTrait {

    /**
     * Specifies a regular expression that an <input> element's value is checked against
     * @return string
     */
    public function getPattern():string {
        return $this->getAttribute('pattern');
    }

    /**
     * Specifies a regular expression that an <input> element's value is checked against
     * @return $this
     */
    public function setPattern(string $value):static {
        return $this->setAttribute('pattern', $value);
    }
}
