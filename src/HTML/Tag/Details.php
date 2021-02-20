<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Details extends AbstractContainerTag
{

    protected string $tagName = 'details';

    use Trait\OntoggleAttributeTrait;
    use Trait\OpenAttributeTrait;

}