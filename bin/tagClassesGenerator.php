<?php

function createCamelCaseName($name) {
    $nameWithAllowedChars = strtolower(preg_replace('#[^a-z0-9]#i', '-', $name));
    $parts = explode('-', $nameWithAllowedChars);
    if($parts) {
        $camelCaseName = $parts[0];
        unset($parts[0]);
        foreach ($parts as $part) {
            if($part) {
                $camelCaseName .= ucfirst($part);
            }
        }
        return $camelCaseName;
    }
    return '';
}

function indent(int $indent = 0, $code = '') {
    $indentation = str_pad('', ($indent * 4), ' ');
    return $indentation.str_replace("\n", "\n".$indentation, $code);
}


//
// setter
//
function createSetterFunctionComment($description) {
    $comment = "/**\n";
    $comment .= " * {$description}\n";
    $comment .= " * @return \$this\n";
    $comment .= " */\n";
    return $comment;
}

function createSetterFunctionName($attributeName) {
    return createCamelCaseName('set-'.$attributeName);
}

function createSetterFunctionPrototype($attributeName) {
    $functionName = createSetterFunctionName($attributeName);
    return "public function {$functionName}(string \$value):static";
}

function createSetterFunction($attributeName, $description) {
    $function = createSetterFunctionComment($description);
    $function .= createSetterFunctionPrototype($attributeName)." {\n";
    $function .= "    return \$this->setAttribute('{$attributeName}', \$value);\n";
    $function .= "}";
    return $function;
}

//
// getter
//
function createGetterFunctionComment($description) {
    $comment = "/**\n";
    $comment .= " * {$description}\n";
    $comment .= " * @return string\n";
    $comment .= " */\n";
    return $comment;
}

function createGetterFunctionName($attributeName) {
    return createCamelCaseName('get-'.$attributeName);
}

function createGetterFunctionPrototype($attributeName) {
    $functionName = createGetterFunctionName($attributeName);
    return "public function {$functionName}():string";
}

function createGetterFunction($attributeName, $description) {
    $function = createGetterFunctionComment($description);
    $function .= createGetterFunctionPrototype($attributeName)." {\n";
    $function .= "    return \$this->getAttribute('{$attributeName}');\n";
    $function .= "}";
    return $function;
}

//
// trait
//
function createAttributeTraitName($attributeName) {
    return ucwords(createCamelCaseName($attributeName.'-Attribute-trait'));
}

function createAttributeTraitNamespace() {
    return "namespace WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;";
}


function createAttributeTraitHeaderUse() {
    return "use WabLab\HTMLTemplateBuilder\HTML\Attribute\Trait;";
}

function createAttributeTraitBodyUse($attributeName, bool $useTraitNamespacePrefix=true) {
    $traitName = createAttributeTraitName($attributeName);
    if($useTraitNamespacePrefix) {
        return "use Trait\\".$traitName.';';
    }
    return "use ".$traitName.';';

}

function createAttributesGroupTraitUseLines(array $attributes, bool $useTraitNamespacePrefix=true) {
    $code = '';
    foreach($attributes as $attribute) {
        $code .= createAttributeTraitBodyUse($attribute, $useTraitNamespacePrefix)."\n";
    }
    return $code;
}

function createAttributeTrait($attributeName, $description) {
    $traitName = createAttributeTraitName($attributeName);
    $trait = createAttributeTraitNamespace()."\n\n";
    $trait .= "trait {$traitName} {\n\n";
    $trait .= indent(1, createGetterFunction($attributeName, $description))."\n\n";
    $trait .= indent(1, createSetterFunction($attributeName, $description))."\n";
    $trait .= "}\n";
    return $trait;
}

function createGlobalAttributeTrait() {
    $traitName = createAttributeTraitName('global');
    $trait = createAttributeTraitNamespace()."\n\n";
    $trait .= "trait {$traitName} {\n\n";
    $trait .= indent(1, createAttributesGroupTraitUseLines([
        'accesskey',
        'class',
        'contenteditable',
        'dir',
        'draggable',
        'hidden',
        'id',
        'lang',
        'spellcheck',
        'style',
        'tabindex',
        'title',
        'translate']
        , false))."\n";
    $trait .= "}\n";
    return $trait;
}

function createAllVisibilTagTrait() {
    $traitName = createAttributeTraitName('all-visible-tags');
    $trait = createAttributeTraitNamespace()."\n\n";
    $trait .= "trait {$traitName} {\n\n";
    $trait .= indent(1, createAttributesGroupTraitUseLines([
            'onblur',
            'onchange',
            'onclick',
            'oncontextmenu',
            'oncopy',
            'oncut',
            'ondblclick',
            'ondrag',
            'ondragend',
            'ondragenter',
            'ondragleave',
            'ondragover',
            'ondragstart',
            'ondrop',
            'onfocus',
            'oninput',
            'oninvalid',
            'onkeydown',
            'onkeypress',
            'onkeyup',
            'onmousedown',
            'onmousemove',
            'onmouseout',
            'onmouseover',
            'onmouseup',
            'onmousewheel',
            'onpaste',
            'onscroll',
            'onselect',
            'onwheel'
        ]
        , false))."\n";
    $trait .= "}\n";
    return $trait;
}

function createAttributeTraitFile($attributeName, $code) {
    $traitName = createAttributeTraitName($attributeName);
    file_put_contents(__DIR__.'/../src/HTML/Attribute/Trait/'.ucfirst($traitName).'.php', "<?php\n\n{$code}");
}

//
// tag
//
function createTagClassNamespace() {
    return 'namespace WabLab\HTMLTemplateBuilder\HTML\Tag;';
}

function createTagClassName($tag) {
    return ucwords(createCamelCaseName($tag));
}

function createTagClass($tag, $attributes) {
    $tagClassName = createTagClassName($tag);
    $code = createTagClassNamespace()."\n\n";
    $code .= createAttributeTraitHeaderUse()."\n\n";
    $code .= "class {$tagClassName} extends AbstractContainerTag\n";
    $code .= "{\n";
    $code .= "\n\nprotected string \$tagName = '".$tag."';\n\n";
    $code .= indent(1, createAttributesGroupTraitUseLines($attributes))."\n";
    $code .= "\n}";
    return $code;
}

function createTagClassFile($tag, $code) {
    $className = createTagClassName($tag);
    file_put_contents(__DIR__.'/../src/HTML/Tag/'.ucfirst($className).'.php', "<?php\n\n{$code}");
}


//
// tag attributes
//
function getAllAttributes() {
    return json_decode(file_get_contents(__DIR__.'/json/attributes.json'), true);
}

function getAllTags() {
    return json_decode(file_get_contents(__DIR__.'/json/tags.json'), true);
}

function getAllAttributesByGroup() {
    $attributes = getAllAttributes();
    $groups = [];
    foreach ($attributes as $attribute) {
        foreach($attribute['tag'] as $groupName) {
            $groups[$groupName][$attribute['attribute']] = $attribute['attribute'];
        }
    }
    return $groups;
}



//
// main
//

// create attributes traits
$attributes = getAllAttributes();
foreach ($attributes as $attribute) {
    $traitCode = createAttributeTrait($attribute['attribute'], $attribute['description'])."\n";
    createAttributeTraitFile($attribute['attribute'], $traitCode);
}
createAttributeTraitFile('all-visible-tags', createAllVisibilTagTrait());
createAttributeTraitFile('global', createGlobalAttributeTrait());


// create tags contracts
$allAttributesByGroup = getAllAttributesByGroup();
$allTags = getAllTags();
foreach($allTags as $tag) {
    $tagClassCode = createTagClass($tag['tag'], $allAttributesByGroup[$tag['tag']] ?? [])."\n\n";
    createTagClassFile($tag['tag'], $tagClassCode);
}
