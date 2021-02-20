<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Colgroup extends AbstractContainerTag
{


protected string $tagName = 'colgroup';

    use Trait\SpanAttributeTrait;
    

}

