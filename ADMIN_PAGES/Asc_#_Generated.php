<?php

function NewId() {
    $newRandomId = date('d') . date('m') . date('y') 
    . date('H') .date('i') . date('s');
    return $newRandomId;
}

?>