<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 09-Mar-2019, 01:53:18 PM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
    include ('./classes_bc/BLOCK.php');
    //echo "Hi";

    $genesisTransaction = ["a sends 12 timcoins to b","b sends 44 timcoins to c"];

    $genesisBlock = new BLOCK(0, $genesisTransaction);

    $block1Transaction = ["a sends 11 timcoins to b","b sends 44 timcoins to c"];
    $block1 = new BLOCK($genesisBlock->getBlockHash(), $block1Transaction);
    $block2Transaction = ["a sends 12 timcoins to b","b sends 44 timcoins to c"];
    $block2 = new BLOCK($block1->getBlockHash(), $block2Transaction);
    echo "Genesis Block: ".$genesisBlock->getBlockHash();
    echo "<br/>Block 1: ".$block1->getBlockHash();
    echo "<br/>Block 2: ".$block2->getBlockHash();
    echo "<br/>Block 2 (previous hash): ".$block2->getPreviousHash();
?>