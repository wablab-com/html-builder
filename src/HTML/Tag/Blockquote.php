<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Blockquote extends AbstractContainerTag
{


protected string $tagName = 'blockquote';

    use Trait\CiteAttributeTrait;
    

}

