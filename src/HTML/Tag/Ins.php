<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Ins extends AbstractContainerTag
{


protected string $tagName = 'ins';

    use Trait\CiteAttributeTrait;
    use Trait\DatetimeAttributeTrait;
    

}

