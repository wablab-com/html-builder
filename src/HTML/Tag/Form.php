<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Form extends AbstractContainerTag
{

    protected string $tagName = 'form';

    use Trait\AcceptCharsetAttributeTrait;
    use Trait\ActionAttributeTrait;
    use Trait\AutocompleteAttributeTrait;
    use Trait\EnctypeAttributeTrait;
    use Trait\MethodAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\NovalidateAttributeTrait;
    use Trait\OnresetAttributeTrait;
    use Trait\OnsubmitAttributeTrait;
    use Trait\RelAttributeTrait;
    use Trait\TargetAttributeTrait;

}