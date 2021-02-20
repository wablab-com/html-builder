<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

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

