<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Track extends AbstractContainerTag
{

    protected string $tagName = 'track';

    use Trait\DefaultAttributeTrait;
    use Trait\KindAttributeTrait;
    use Trait\LabelAttributeTrait;
    use Trait\OncuechangeAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\SrclangAttributeTrait;

}