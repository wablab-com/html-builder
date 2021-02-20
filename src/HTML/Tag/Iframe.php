<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Iframe extends AbstractContainerTag
{

    protected string $tagName = 'iframe';

    use Trait\HeightAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\SandboxAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrcdocAttributeTrait;
    use Trait\WidthAttributeTrait;

}