<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Source extends AbstractContainerTag
{

    protected string $tagName = 'source';

    use Trait\MediaAttributeTrait;
    use Trait\SizesAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrcsetAttributeTrait;
    use Trait\TypeAttributeTrait;

}