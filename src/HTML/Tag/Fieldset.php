<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Fieldset extends AbstractContainerTag
{


protected string $tagName = 'fieldset';

    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\NameAttributeTrait;
    

}

