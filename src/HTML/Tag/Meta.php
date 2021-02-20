<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Meta extends AbstractContainerTag
{


protected string $tagName = 'meta';

    use Trait\CharsetAttributeTrait;
    use Trait\ContentAttributeTrait;
    use Trait\HttpEquivAttributeTrait;
    use Trait\NameAttributeTrait;
    

}

