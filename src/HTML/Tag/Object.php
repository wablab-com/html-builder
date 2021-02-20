<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Object extends AbstractContainerTag
{


protected string $tagName = 'object';

    use Trait\DataAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\HeightAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\OnabortAttributeTrait;
    use Trait\OncanplayAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\TypeAttributeTrait;
    use Trait\UsemapAttributeTrait;
    use Trait\WidthAttributeTrait;
    

}

