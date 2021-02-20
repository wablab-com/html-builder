<?php

function htmlTableToArray($html, $stripTags = true, $htmlEntitiesDecode = true) {
    preg_match_all('#<tr>.*?</tr>#is', $html, $matches);
    $table = [];
    if(!empty($matches[0])) {
        foreach($matches[0] as $rowHtml) {
            preg_match_all('#<td.*?>(.*?)</td>#is', $rowHtml, $rowMatches);
            $tableRow = [];
            if(!empty($rowMatches[1])) {
                foreach($rowMatches[1] as $rowMatch) {
                    $fieldValue = $rowMatch;
                    if($stripTags) {
                        //$fieldValue = strip_tags($fieldValue, '');
                        $fieldValue = preg_replace('#<a.*?>|</a>#i', '', $fieldValue);
                    }
                    if($htmlEntitiesDecode) {
                        $fieldValue = html_entity_decode($fieldValue);
                    }
                    $tableRow[] = $fieldValue;
                }
            }
            if(!empty($tableRow)) {
                $table[] = $tableRow;
            }
        }
    }

    return $table;
}

function tableToJson($fieldNames, $table) {
    $labeledTable = [];
    foreach($table as $row) {
        $labeledRow = [];
        foreach($row as $inx => $value) {
            $labeledRow[$fieldNames[$inx]] = $value; //preg_replace('/\s+/', ' ', trim($value, '<>'));
        }
        $labeledTable[] = $labeledRow;
    }
    return json_encode($labeledTable);
}




//$tagsHtml = file_get_contents(__DIR__.'/tmp/alltags.html');
//$table = htmlTableToArray($tagsHtml);
//$json = tableToJson(['tag', 'description'], $table);


//$attributesHtml = file_get_contents(__DIR__.'/tmp/attributes.html');
//$table = htmlTableToArray($attributesHtml);
//foreach($table as &$row) {
//    $allowedTags = explode(',', $row[1]);
//    foreach($allowedTags as &$tag) {
//        $tag = trim($tag, " \ \t\n\r\0\x0B<>");
//    }
//    $row[1] = $allowedTags;
//}
//$json = tableToJson(['attribute', 'tag', 'description'], $table);
//file_put_contents(__DIR__.'/json/attributes.json', $json);

