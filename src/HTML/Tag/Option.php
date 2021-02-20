<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Option extends AbstractContainerTag
{

    protected string $tagName = 'option';

    use Trait\DisabledAttributeTrait;
    use Trait\LabelAttributeTrait;
    use Trait\SelectedAttributeTrait;
    use Trait\ValueAttributeTrait;

}