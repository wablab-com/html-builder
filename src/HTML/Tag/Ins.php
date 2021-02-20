<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Ins extends AbstractContainerTag
{

    protected string $tagName = 'ins';

    use Trait\CiteAttributeTrait;
    use Trait\DatetimeAttributeTrait;

}