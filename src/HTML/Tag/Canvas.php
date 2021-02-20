<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Canvas extends AbstractContainerTag
{


protected string $tagName = 'canvas';

    use Trait\HeightAttributeTrait;
    use Trait\WidthAttributeTrait;
    

}

