<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Label extends AbstractContainerTag
{

    protected string $tagName = 'label';

    use Trait\ForAttributeTrait;
    use Trait\FormAttributeTrait;

}