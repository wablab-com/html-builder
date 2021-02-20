<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Col extends AbstractContainerTag
{

    protected string $tagName = 'col';

    use Trait\SpanAttributeTrait;

}