<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Link extends AbstractContainerTag
{


protected string $tagName = 'link';

    use Trait\HrefAttributeTrait;
    use Trait\HreflangAttributeTrait;
    use Trait\MediaAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\RelAttributeTrait;
    use Trait\SizesAttributeTrait;
    use Trait\TypeAttributeTrait;
    

}

