<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Blockquote extends AbstractContainerTag
{

    protected string $tagName = 'blockquote';

    use Trait\CiteAttributeTrait;

}