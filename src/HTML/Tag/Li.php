<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Li extends AbstractContainerTag
{


protected string $tagName = 'li';

    use Trait\ValueAttributeTrait;
    

}

