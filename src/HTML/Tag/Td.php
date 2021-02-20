<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Td extends AbstractContainerTag
{


protected string $tagName = 'td';

    use Trait\ColspanAttributeTrait;
    use Trait\HeadersAttributeTrait;
    use Trait\RowspanAttributeTrait;
    

}

