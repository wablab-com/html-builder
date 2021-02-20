<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Colgroup extends AbstractContainerTag
{

    protected string $tagName = 'colgroup';

    use Trait\SpanAttributeTrait;

}