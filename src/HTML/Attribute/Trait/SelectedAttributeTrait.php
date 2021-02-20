<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait SelectedAttributeTrait {

    /**
     * Specifies that an option should be pre-selected when the page loads
     * @return string
     */
    public function getSelected():string {
        return $this->getAttribute('selected');
    }

    /**
     * Specifies that an option should be pre-selected when the page loads
     * @return $this
     */
    public function setSelected(string $value):static {
        return $this->setAttribute('selected', $value);
    }
}

