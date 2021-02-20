<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Area extends AbstractContainerTag
{

    protected string $tagName = 'area';

    use Trait\AltAttributeTrait;
    use Trait\CoordsAttributeTrait;
    use Trait\DownloadAttributeTrait;
    use Trait\HrefAttributeTrait;
    use Trait\HreflangAttributeTrait;
    use Trait\MediaAttributeTrait;
    use Trait\RelAttributeTrait;
    use Trait\ShapeAttributeTrait;
    use Trait\TargetAttributeTrait;

}