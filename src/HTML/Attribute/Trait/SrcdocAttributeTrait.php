<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait SrcdocAttributeTrait {

    /**
     * Specifies the HTML content of the page to show in the <iframe>
     * @return string
     */
    public function getSrcdoc():string {
        return $this->getAttribute('srcdoc');
    }

    /**
     * Specifies the HTML content of the page to show in the <iframe>
     * @return $this
     */
    public function setSrcdoc(string $value):static {
        return $this->setAttribute('srcdoc', $value);
    }
}

