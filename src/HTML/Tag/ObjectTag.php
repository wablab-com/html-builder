<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class ObjectTag extends AbstractContainerTag
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