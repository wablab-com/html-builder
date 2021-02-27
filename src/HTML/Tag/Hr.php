<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Hr extends AbstractTag
{

    protected string $tagName = 'hr';
    
    protected bool $shortCloseAllowed = true;


}