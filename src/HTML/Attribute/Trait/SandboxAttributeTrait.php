<?php

namespace WabLab\HtmlBuilder\HTML\Attribute\Trait;

trait SandboxAttributeTrait {

    /**
     * Enables an extra set of restrictions for the content in an <iframe>
     * @return string
     */
    public function getSandbox():string {
        return $this->getAttribute('sandbox');
    }

    /**
     * Enables an extra set of restrictions for the content in an <iframe>
     * @return $this
     */
    public function setSandbox(string $value):static {
        return $this->setAttribute('sandbox', $value);
    }
}
