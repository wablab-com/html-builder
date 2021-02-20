<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Select extends AbstractContainerTag
{

    protected string $tagName = 'select';

    use Trait\AutofocusAttributeTrait;
    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\MultipleAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\RequiredAttributeTrait;
    use Trait\SizeAttributeTrait;

}