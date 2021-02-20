<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class A extends AbstractContainerTag
{


protected string $tagName = 'a';

    use Trait\DownloadAttributeTrait;
    use Trait\HrefAttributeTrait;
    use Trait\HreflangAttributeTrait;
    use Trait\MediaAttributeTrait;
    use Trait\RelAttributeTrait;
    use Trait\TargetAttributeTrait;
    use Trait\TypeAttributeTrait;
    

}

