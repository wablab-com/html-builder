<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Embed extends AbstractTag
{

    protected string $tagName = 'embed';
    
    protected bool $shortCloseAllowed = true;

    use Trait\HeightAttributeTrait;
    use Trait\OnabortAttributeTrait;
    use Trait\OncanplayAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\TypeAttributeTrait;
    use Trait\WidthAttributeTrait;

}