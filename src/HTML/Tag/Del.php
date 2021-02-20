<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Del extends AbstractContainerTag
{


protected string $tagName = 'del';

    use Trait\CiteAttributeTrait;
    use Trait\DatetimeAttributeTrait;
    

}

