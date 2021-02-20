<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Param extends AbstractContainerTag
{

    protected string $tagName = 'param';

    use Trait\NameAttributeTrait;
    use Trait\ValueAttributeTrait;

}