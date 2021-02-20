<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait OnwaitingAttributeTrait {

    /**
     * Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data)
     * @return string
     */
    public function getOnwaiting():string {
        return $this->getAttribute('onwaiting');
    }

    /**
     * Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data)
     * @return $this
     */
    public function setOnwaiting(string $value):static {
        return $this->setAttribute('onwaiting', $value);
    }
}
