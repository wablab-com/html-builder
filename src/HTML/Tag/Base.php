<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Base extends AbstractContainerTag
{


protected string $tagName = 'base';

    use Trait\HrefAttributeTrait;
    use Trait\TargetAttributeTrait;
    

}

