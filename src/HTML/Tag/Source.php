<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Source extends AbstractTag
{

    protected string $tagName = 'source';
    
    protected bool $shortCloseAllowed = true;

    use Trait\MediaAttributeTrait;
    use Trait\SizesAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrcsetAttributeTrait;
    use Trait\TypeAttributeTrait;

}