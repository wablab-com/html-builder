<?php

namespace WabLab\Tests\Classes;

use WabLab\HtmlBuilder\Contract\IRenderingContext;

class TestRenderingContext implements IRenderingContext {

    protected string $contextInput = '';

    public function getContextInput(): string
    {
        return $this->contextInput;
    }

    public function setContextInput(string $contextInput): void
    {
        $this->contextInput = $contextInput;
    }

}