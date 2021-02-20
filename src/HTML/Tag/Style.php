<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Style extends AbstractContainerTag
{

    protected string $tagName = 'style';

    use Trait\MediaAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\TypeAttributeTrait;

}