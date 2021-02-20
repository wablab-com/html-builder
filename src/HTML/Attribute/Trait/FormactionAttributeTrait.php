<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait FormactionAttributeTrait {

    /**
     * Specifies where to send the form-data when a form is submitted. Only for type="submit"
     * @return string
     */
    public function getFormaction():string {
        return $this->getAttribute('formaction');
    }

    /**
     * Specifies where to send the form-data when a form is submitted. Only for type="submit"
     * @return $this
     */
    public function setFormaction(string $value):static {
        return $this->setAttribute('formaction', $value);
    }
}
