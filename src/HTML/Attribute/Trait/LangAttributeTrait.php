<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait LangAttributeTrait {

    /**
     * Specifies the language of the element's content
     * @return string
     */
    public function getLang():string {
        return $this->getAttribute('lang');
    }

    /**
     * Specifies the language of the element's content
     * @return $this
     */
    public function setLang(string $value):static {
        return $this->setAttribute('lang', $value);
    }
}
