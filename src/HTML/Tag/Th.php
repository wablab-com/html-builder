<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Th extends AbstractContainerTag
{


protected string $tagName = 'th';

    use Trait\ColspanAttributeTrait;
    use Trait\HeadersAttributeTrait;
    use Trait\RowspanAttributeTrait;
    use Trait\ScopeAttributeTrait;
    

}

