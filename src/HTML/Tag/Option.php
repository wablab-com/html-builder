<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Option extends AbstractContainerTag
{


protected string $tagName = 'option';

    use Trait\DisabledAttributeTrait;
    use Trait\LabelAttributeTrait;
    use Trait\SelectedAttributeTrait;
    use Trait\ValueAttributeTrait;
    

}

