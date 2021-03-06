<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Script extends AbstractContainerTag
{

    protected string $tagName = 'script';

    use Trait\AsyncAttributeTrait;
    use Trait\CharsetAttributeTrait;
    use Trait\DeferAttributeTrait;
    use Trait\OnerrorAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\TypeAttributeTrait;

}