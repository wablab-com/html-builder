<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Img extends AbstractContainerTag
{


protected string $tagName = 'img';

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

