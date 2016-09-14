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


        function reverseString($input_string) {
            $input_length = strlen($input_string);

            //NOTE: $stop_index will be the character before the middle if the word has an odd length.

            //  T A C O C A T
            //  0 1 2 3 4 5 6
            //E.G. TACOCAT length is odd so $stop_index should be 2 ("C")

            //  T A C O
            //  0 1 2 3
            //E.G. TACO length is even so $stop_index should be 1 ("A")


            $stop_index = floor($input_length / 2) - 1;

            for ($char_index = 0; $char_index <= $stop_index; $char_index++) {
                $temp = $input_string[$char_index];

                //NOTE:
                //  T A C O
                //  0 1 2 3
                //E.G. current char at index 0 then reverse char index is 4 - 0 - 1 = 3 ("O")
                //    current char at index 1 then reverse char index is 4 - 1 - 1 = 2 ("C")
                $reverse_char_index = $input_length - $char_index - 1;

                $input_string[$char_index] = $input_string[$reverse_char_index];
                $input_string[$reverse_char_index] = $temp;
            }

            return $input_string;
        }


        function checkIfPalindrome($word_to_check)
        {
            $reverse_word_to_check = $this->reverseString($word_to_check);

            if ($reverse_word_to_check === $word_to_check) {
                return true;
            }
            else {
                return false;
            }

        }
    }

?>
