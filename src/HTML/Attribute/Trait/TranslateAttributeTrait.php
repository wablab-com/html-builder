<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait TranslateAttributeTrait {

    /**
     * Specifies whether the content of an element should be translated or not
     * @return string
     */
    public function getTranslate():string {
        return $this->getAttribute('translate');
    }

    /**
     * Specifies whether the content of an element should be translated or not
     * @return $this
     */
    public function setTranslate(string $value):static {
        return $this->setAttribute('translate', $value);
    }
}
