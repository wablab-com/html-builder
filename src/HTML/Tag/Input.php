<?php

namespace WabLab\HtmlBuilder\HTML\Tag;

use WabLab\HtmlBuilder\HTML\Attribute\Trait;

class Input extends AbstractContainerTag
{

    protected string $tagName = 'input';

    use Trait\AcceptAttributeTrait;
    use Trait\AltAttributeTrait;
    use Trait\AutocompleteAttributeTrait;
    use Trait\AutofocusAttributeTrait;
    use Trait\CheckedAttributeTrait;
    use Trait\DirnameAttributeTrait;
    use Trait\DisabledAttributeTrait;
    use Trait\FormAttributeTrait;
    use Trait\FormactionAttributeTrait;
    use Trait\HeightAttributeTrait;
    use Trait\ListAttributeTrait;
    use Trait\MaxAttributeTrait;
    use Trait\MaxlengthAttributeTrait;
    use Trait\MinAttributeTrait;
    use Trait\MultipleAttributeTrait;
    use Trait\NameAttributeTrait;
    use Trait\OnloadAttributeTrait;
    use Trait\OnsearchAttributeTrait;
    use Trait\PatternAttributeTrait;
    use Trait\PlaceholderAttributeTrait;
    use Trait\ReadonlyAttributeTrait;
    use Trait\RequiredAttributeTrait;
    use Trait\SizeAttributeTrait;
    use Trait\SrcAttributeTrait;
    use Trait\StepAttributeTrait;
    use Trait\TypeAttributeTrait;
    use Trait\ValueAttributeTrait;
    use Trait\WidthAttributeTrait;

}