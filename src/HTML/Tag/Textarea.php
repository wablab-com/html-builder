<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Textarea extends AbstractContainerTag
{


protected string $tagName = 'textarea';

    use Trait\AutofocusAttributeTrait;
    use Trait\ColsAttributeTrait;
    use Trait\DirnameAttributeTrait;
    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\MaxlengthAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\PlaceholderAttributeTrait;
    use Trait\ReadonlyAttributeTrait;
    use Trait\RequiredAttributeTrait;
    use Trait\RowsAttributeTrait;
    use Trait\WrapAttributeTrait;
    

}

