<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Meta extends AbstractTag
{

    protected string $tagName = 'meta';
    
    protected bool $shortCloseAllowed = true;

    use Trait\CharsetAttributeTrait;
    use Trait\ContentAttributeTrait;
    use Trait\HttpEquivAttributeTrait;
    use Trait\NameAttributeTrait;

}