<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Fieldset extends AbstractContainerTag
{

    protected string $tagName = 'fieldset';

    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\NameAttributeTrait;

}