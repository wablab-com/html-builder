<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait DatetimeAttributeTrait {

    /**
     * Specifies the date and time
     * @return string
     */
    public function getDatetime():string {
        return $this->getAttribute('datetime');
    }

    /**
     * Specifies the date and time
     * @return $this
     */
    public function setDatetime(string $value):static {
        return $this->setAttribute('datetime', $value);
    }
}

