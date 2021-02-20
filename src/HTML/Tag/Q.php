<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Q extends AbstractContainerTag
{

    protected string $tagName = 'q';

    use Trait\CiteAttributeTrait;

}