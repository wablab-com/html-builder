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

function getAllAttributes() {
    return json_decode(file_get_contents(BINDIR.'/json/attributes.json'), true);
}

function getAllTags() {
    return json_decode(file_get_contents(BINDIR.'/json/tags.json'), true);
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