<?php


function CountData($table)
{
    $db = \Config\Database::connect();
    return $db->table($table)->countAllResults();
}
