<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Time extends AbstractContainerTag
{

    protected string $tagName = 'time';

    use Trait\DatetimeAttributeTrait;

}