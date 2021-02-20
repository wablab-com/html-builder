<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

trait OptimumAttributeTrait {

    /**
     * Specifies what value is the optimal value for the gauge
     * @return string
     */
    public function getOptimum():string {
        return $this->getAttribute('optimum');
    }

    /**
     * Specifies what value is the optimal value for the gauge
     * @return $this
     */
    public function setOptimum(string $value):static {
        return $this->setAttribute('optimum', $value);
    }
}

