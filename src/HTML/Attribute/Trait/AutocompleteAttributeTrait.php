<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait AutocompleteAttributeTrait {

    /**
     * Specifies whether the <form> or the <input> element should have autocomplete enabled
     * @return string
     */
    public function getAutocomplete():string {
        return $this->getAttribute('autocomplete');
    }

    /**
     * Specifies whether the <form> or the <input> element should have autocomplete enabled
     * @return $this
     */
    public function setAutocomplete(string $value):static {
        return $this->setAttribute('autocomplete', $value);
    }
}

