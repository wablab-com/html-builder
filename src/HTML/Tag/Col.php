<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Col extends AbstractContainerTag
{


protected string $tagName = 'col';

    use Trait\SpanAttributeTrait;
    

}

