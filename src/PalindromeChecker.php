<?php
    class PalindromeChecker
    {
        private $check_word;
        private $check_result;

        function __construct($word)
        {
            $this->check_word = $word;
            $this->check_result = false;
        }

        function getCheckWord()
        {
            return $this->check_word;
        }
        function setCheckWord($word_to_check)
        {
            $this->check_word = (string) $word_to_check;
        }
        function getResult()
        {
            return $this->check_result;
        }
        function setResult($word_to_check_result)
        {
            $this->check_word = (bool) $word_to_check_result;
        }

        function checkIfPalindrome($word_to_check)
        {
            if (strlen($word_to_check) == 1) {
                return true;
            }
            else {
                return false;
            }

        }
    }

?>
