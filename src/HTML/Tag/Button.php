<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Button extends AbstractContainerTag
{


protected string $tagName = 'button';

    use Trait\AutofocusAttributeTrait;
    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\FormactionAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\TypeAttributeTrait;
    use Trait\ValueAttributeTrait;
    

}

