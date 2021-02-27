<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Area extends AbstractTag
{

    protected string $tagName = 'area';
    
    protected bool $shortCloseAllowed = true;

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