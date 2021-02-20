<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Button extends AbstractContainerTag
{

    protected string $tagName = 'button';

    use Trait\AutofocusAttributeTrait;
    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\FormactionAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\TypeAttributeTrait;
    use Trait\ValueAttributeTrait;

}