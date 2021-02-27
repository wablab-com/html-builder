<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Param extends AbstractTag
{

    protected string $tagName = 'param';
    
    protected bool $shortCloseAllowed = true;

    use Trait\NameAttributeTrait;
    use Trait\ValueAttributeTrait;

}