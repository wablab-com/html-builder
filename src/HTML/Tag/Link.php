<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Link extends AbstractContainerTag
{

    protected string $tagName = 'link';
    
    protected bool $shortCloseAllowed = true;

    use Trait\HrefAttributeTrait;
    use Trait\HreflangAttributeTrait;
    use Trait\MediaAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\RelAttributeTrait;
    use Trait\SizesAttributeTrait;
    use Trait\TypeAttributeTrait;

}