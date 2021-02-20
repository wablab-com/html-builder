<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Time extends AbstractContainerTag
{


protected string $tagName = 'time';

    use Trait\DatetimeAttributeTrait;
    

}

