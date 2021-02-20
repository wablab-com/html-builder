<?php

namespace WabLab\HTMLTemplateBuilder\HTML\Tag;

use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;

class Meter extends AbstractContainerTag
{


protected string $tagName = 'meter';

    use Trait\FormAttributeTrait;
    use Trait\HighAttributeTrait;
    use Trait\LowAttributeTrait;
    use Trait\MaxAttributeTrait;
    use Trait\MinAttributeTrait;
    use Trait\OptimumAttributeTrait;
    use Trait\ValueAttributeTrait;
    

}

