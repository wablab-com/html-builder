<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Label extends AbstractContainerTag
{


protected string $tagName = 'label';

    use Trait\ForAttributeTrait;
    use Trait\FormAttributeTrait;
    

}

