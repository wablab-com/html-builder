<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Q extends AbstractContainerTag
{


protected string $tagName = 'q';

    use Trait\CiteAttributeTrait;
    

}

