<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait DraggableAttributeTrait {

    /**
     * Specifies whether an element is draggable or not
     * @return string
     */
    public function getDraggable():string {
        return $this->getAttribute('draggable');
    }

    /**
     * Specifies whether an element is draggable or not
     * @return $this
     */
    public function setDraggable(string $value):static {
        return $this->setAttribute('draggable', $value);
    }
}
