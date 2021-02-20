<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait ControlsAttributeTrait {

    /**
     * Specifies that audio/video controls should be displayed (such as a play/pause button etc)
     * @return string
     */
    public function getControls():string {
        return $this->getAttribute('controls');
    }

    /**
     * Specifies that audio/video controls should be displayed (such as a play/pause button etc)
     * @return $this
     */
    public function setControls(string $value):static {
        return $this->setAttribute('controls', $value);
    }
}
