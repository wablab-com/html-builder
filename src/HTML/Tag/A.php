<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class A extends AbstractContainerTag
{

    protected string $tagName = 'a';
    
    protected bool $shortCloseAllowed = true;

    use Trait\DownloadAttributeTrait;
    use Trait\HrefAttributeTrait;
    use Trait\HreflangAttributeTrait;
    use Trait\MediaAttributeTrait;
    use Trait\RelAttributeTrait;
    use Trait\TargetAttributeTrait;
    use Trait\TypeAttributeTrait;

}