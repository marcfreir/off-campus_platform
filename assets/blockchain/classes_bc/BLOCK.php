<?php
/* 
    Subject    : OFF CAMPUS PLATFORM PROJECT
    Created on : 09-Mar-2019, 01:52:05 PM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/
?>

<?php
    class BLOCK
    {
        private $previousHash;
        private $transactions = [];
        private $blockHash;

        function __construct($previousHash, $transactions)
        {
            $this->previousHash = $previousHash;
            $this->transactions = $transactions;
            //$contents = [md5(serialize($transactions)), $previousHash];
            $contents = [hash('sha256', (serialize($transactions))), $previousHash];
            //$this->blockHash = md5(serialize($contents));
            $this->blockHash = hash('sha256', (serialize($contents)));
        }

        function getPreviousHash()
        {
            return $this->previousHash;
        }

        function getTransactions()
        {
            return $this->transactions;
        }

        function getBlockHash()
        {
            return $this->blockHash;
        }
    }
?>