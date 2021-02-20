<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait LoopAttributeTrait {

    /**
     * Specifies that the audio/video will start over again, every time it is finished
     * @return string
     */
    public function getLoop():string {
        return $this->getAttribute('loop');
    }

    /**
     * Specifies that the audio/video will start over again, every time it is finished
     * @return $this
     */
    public function setLoop(string $value):static {
        return $this->setAttribute('loop', $value);
    }
}
