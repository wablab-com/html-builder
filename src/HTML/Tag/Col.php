<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Col extends AbstractTag
{

    protected string $tagName = 'col';
    
    protected bool $shortCloseAllowed = true;

    use Trait\SpanAttributeTrait;

}