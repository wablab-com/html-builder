<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Ol extends AbstractContainerTag
{


protected string $tagName = 'ol';

    use Trait\ReversedAttributeTrait;
    use Trait\StartAttributeTrait;
    

}

