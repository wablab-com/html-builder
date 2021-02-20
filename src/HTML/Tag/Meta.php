<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Meta extends AbstractContainerTag
{

    protected string $tagName = 'meta';

    use Trait\CharsetAttributeTrait;
    use Trait\ContentAttributeTrait;
    use Trait\HttpEquivAttributeTrait;
    use Trait\NameAttributeTrait;

}