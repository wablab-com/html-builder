<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Output extends AbstractContainerTag
{


protected string $tagName = 'output';

    use Trait\ForAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\NameAttributeTrait;
    

}

