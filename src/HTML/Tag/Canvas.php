<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Canvas extends AbstractContainerTag
{

    protected string $tagName = 'canvas';

    use Trait\HeightAttributeTrait;
    use Trait\WidthAttributeTrait;

}