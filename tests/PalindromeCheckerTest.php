<?php

    require_once (__DIR__ . "/../src/PalindromeChecker.php");

    class PalindromeCheckerTest extends PHPUnit_Framework_TestCase
    {
        function test_SingleLowerAlpha() {

            //ARRANGE
            $word_to_check = "a";
            $expected_output = true;
            $palindrome_checker_instance = new PalindromeChecker($word_to_check);

            //ACT
            $test_result = $palindrome_checker_instance->checkIfPalindrome($word_to_check);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);

        }

        function test_MultipleLowerAlphaNotPalindrome() {

            //ARRANGE
            $word_to_check = "treat";
            $expected_output = false;
            $palindrome_checker_instance = new PalindromeChecker($word_to_check);

            //ACT
            $test_result = $palindrome_checker_instance->checkIfPalindrome($word_to_check);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);
        }

        function test_MultipleLowerAlphaPalindrome() {

            //ARRANGE
            $word_to_check = "tacocat";
            $expected_output = true;
            $palindrome_checker_instance = new PalindromeChecker($word_to_check);

            //ACT
            $test_result = $palindrome_checker_instance->checkIfPalindrome($word_to_check);

            //ASSERT
            $this->assertEquals($expected_output, $test_result);

        }
    }

?>
