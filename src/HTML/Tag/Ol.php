<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Ol extends AbstractContainerTag
{

    protected string $tagName = 'ol';

    use Trait\ReversedAttributeTrait;
    use Trait\StartAttributeTrait;

}