<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Br extends AbstractTag
{

    protected string $tagName = 'br';
    
    protected bool $shortCloseAllowed = true;


}