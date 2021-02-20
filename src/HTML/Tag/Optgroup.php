<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Optgroup extends AbstractContainerTag
{

    protected string $tagName = 'optgroup';

    use Trait\DisabledAttributeTrait;
    use Trait\LabelAttributeTrait;

}