<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Select extends AbstractContainerTag
{


protected string $tagName = 'select';

    use Trait\AutofocusAttributeTrait;
    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\MultipleAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\RequiredAttributeTrait;
    use Trait\SizeAttributeTrait;
    

}

