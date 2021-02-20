<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait AlignAttributeTrait {

    /**
     * Specifies the alignment according to surrounding elements. Use CSS instead
     * @return string
     */
    public function getAlign():string {
        return $this->getAttribute('align');
    }

    /**
     * Specifies the alignment according to surrounding elements. Use CSS instead
     * @return $this
     */
    public function setAlign(string $value):static {
        return $this->setAttribute('align', $value);
    }
}
