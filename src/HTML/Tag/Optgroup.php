<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Optgroup extends AbstractContainerTag
{


protected string $tagName = 'optgroup';

    use Trait\DisabledAttributeTrait;
    use Trait\LabelAttributeTrait;
    

}

