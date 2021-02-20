<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Details extends AbstractContainerTag
{


protected string $tagName = 'details';

    use Trait\OntoggleAttributeTrait;
    use Trait\OpenAttributeTrait;
    

}

