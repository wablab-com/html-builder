<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Map extends AbstractContainerTag
{

    protected string $tagName = 'map';

    use Trait\NameAttributeTrait;

}