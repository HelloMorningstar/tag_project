<?php

/**
 * @param $items
 * @param $itemPrice
 * @return array
 */
function findItemsCheaperThen($items, $itemPrice){
    $result = [];
    foreach ($items as $thing){
        if($thing['price'] < $itemPrice){
            $result [] = $thing;
        }
    }
    return $result;
}


/**
 * @param $item
 * @param $value
 * @return null
 */
function find($item, $value)
{
    foreach ($item as $itemid) {
        if ($itemid['id'] === $value) {
            return $itemid;
        }
    }
    return null;
}

