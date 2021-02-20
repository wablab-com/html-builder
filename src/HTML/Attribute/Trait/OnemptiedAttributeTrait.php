<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OnemptiedAttributeTrait {

    /**
     * Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects)
     * @return string
     */
    public function getOnemptied():string {
        return $this->getAttribute('onemptied');
    }

    /**
     * Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects)
     * @return $this
     */
    public function setOnemptied(string $value):static {
        return $this->setAttribute('onemptied', $value);
    }
}

