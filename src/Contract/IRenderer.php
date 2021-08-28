<?php

namespace WabLab\HtmlBuilder\Contract;

interface IRenderer
{
    public function render(?IRenderingContext $context = null):string;
}