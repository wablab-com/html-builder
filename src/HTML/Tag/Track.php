<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Track extends AbstractTag
{

    protected string $tagName = 'track';
    
    protected bool $shortCloseAllowed = true;

    use Trait\DefaultAttributeTrait;
    use Trait\KindAttributeTrait;
    use Trait\LabelAttributeTrait;
    use Trait\OncuechangeAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrclangAttributeTrait;

}