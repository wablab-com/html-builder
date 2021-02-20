<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Del extends AbstractContainerTag
{

    protected string $tagName = 'del';

    use Trait\CiteAttributeTrait;
    use Trait\DatetimeAttributeTrait;

}