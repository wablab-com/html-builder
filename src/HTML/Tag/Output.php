<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Output extends AbstractContainerTag
{

    protected string $tagName = 'output';

    use Trait\ForAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\NameAttributeTrait;

}