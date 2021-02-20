<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Source extends AbstractContainerTag
{


protected string $tagName = 'source';

    use Trait\MediaAttributeTrait;
    use Trait\SizesAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrcsetAttributeTrait;
    use Trait\TypeAttributeTrait;
    

}

