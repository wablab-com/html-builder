<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Param extends AbstractContainerTag
{


protected string $tagName = 'param';

    use Trait\NameAttributeTrait;
    use Trait\ValueAttributeTrait;
    

}

