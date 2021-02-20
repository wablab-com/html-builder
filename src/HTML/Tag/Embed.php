<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Embed extends AbstractContainerTag
{


protected string $tagName = 'embed';

    use Trait\HeightAttributeTrait;
    use Trait\OnabortAttributeTrait;
    use Trait\OncanplayAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\TypeAttributeTrait;
    use Trait\WidthAttributeTrait;
    

}

