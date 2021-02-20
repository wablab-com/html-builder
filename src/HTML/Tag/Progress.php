<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Progress extends AbstractContainerTag
{


protected string $tagName = 'progress';

    use Trait\MaxAttributeTrait;
    use Trait\ValueAttributeTrait;
    

}

