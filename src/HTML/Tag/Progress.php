<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Progress extends AbstractContainerTag
{

    protected string $tagName = 'progress';

    use Trait\MaxAttributeTrait;
    use Trait\ValueAttributeTrait;

}