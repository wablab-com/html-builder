<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Li extends AbstractContainerTag
{

    protected string $tagName = 'li';

    use Trait\ValueAttributeTrait;

}