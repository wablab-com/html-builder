<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Img extends AbstractTag
{

    protected string $tagName = 'img';
    
    protected bool $shortCloseAllowed = true;

    use Trait\AltAttributeTrait;
    use Trait\HeightAttributeTrait;
    use Trait\IsmapAttributeTrait;
    use Trait\OnabortAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\SizesAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrcsetAttributeTrait;
    use Trait\UsemapAttributeTrait;
    use Trait\WidthAttributeTrait;

}