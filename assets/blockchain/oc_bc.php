<?php
    //CREATING TWO ARRAYS TO STORE SOME DATA
    $list1 = ["a", "b", "c"];
    $list2 = ["a", "b", "c"];
    $list3 = array("a", "b", "c");

    //PRINTING THE LISTS
    echo "<h1>This has MD5 and serialize</h1>";
    echo "<br />";
    echo "list1: " . md5(serialize($list1));
    echo "<br />";
    echo "<h1>This has MD5 and serialize</h1>";
    echo "<br />";
    echo "list2: " . md5(serialize($list2));
    echo "<br />";
    echo "<h1>This has SHA256 and serialize</h1>";
    echo "<br />";
    echo hash('sha256', (serialize($list1)));
    echo "<br />";
    echo "<h1>This has serialize</h1>";
    echo "<br />";
    echo serialize($list1);
    echo "<br />";
    echo "<h1>These have VAR_DUMP</h1>";
    echo "<br />";
    var_dump($list1);
    echo "<br />";
    var_dump($list3);
    echo "<br />";
    echo "<h1>This has PRINT_R with 'pre' tags</h1>";
    echo "<br />";
    echo "<pre>";
    print_r($list1);
    echo "<pre/>";
    echo "<br />";
    echo "<h1>This has SHA256 with VAR_DUMP</h1>";
    echo "<br />";
    echo hash('sha256', (var_dump($list1)));
    echo "<br />";
    echo "<h1>This has SHA256 with PRINT_R</h1>";
    echo "<br />";
    echo hash('sha256', (print_r($list1)));
    echo "<br />";
    echo "<h1>Just Hashing A Text</h1>";
    $text1 = "Printing an array in PHP is one of the most basic and necessary functions. Here are a few tricks and tools to make it easier.";
    echo hash('sha256', $text1);

    //var_dump($list1);
?>