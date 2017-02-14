<?php
require_once "src/Anagram.php";
class AnagramTest extends PHPUnit_Framework_TestCase
{

    // Check string for 1 letter words.
    // ex. String = "hall", anagram = "a"

    function test_checkAnagram1()
    {
        //Arrange
        $testWord = "a";
        $anagramList = ['a'];
        $test_Anagram = new Anagram($testWord, $anagramList);

        //Act
        $result = $test_Anagram->createAnagrams();

        //Assert
        $this->assertEquals(["a"], $result);

    }


    // Check string for 2 letter words.
    // ex. String = "hall", anagram = "a", "ha", "ah", "la"

    function test_checkAnagram2()
    {
        //Arrange
        $testWord = "not";
        $anagramList = ['a', 'sam', 'hello', 'ton'];
        $test_Anagram = new Anagram($testWord, $anagramList);

        //Act
        $result = $test_Anagram->createAnagrams();

        //Assert
        $this->assertEquals(['ton'], $result);

    }

    // Check string for 3 letter words.
    // ex. String = "hall", anagram = "a", "ha", "ah", "la", "all"

    function test_checkAnagram3()
    {
        //Arrange
        $testWord = "bread";
        $anagramList = ['sam', 'hello', 'beard'];
        $test_Anagram = new Anagram($testWord, $anagramList);

        //Act
        $result = $test_Anagram->createAnagrams();

        //Assert
        $this->assertEquals(['beard'], $result);

    }

    // Check string for number of letters in string, build anagram list of words contained within string.
    // ex. String = "hall", anagram = "a", "ha", "ah", "la", "all"

    function test_checkAnagramFull()
    {
        //Arrange
        $testWord = "hello";
        $anagramList = ['a', 'sam', 'hell'];
        $test_Anagram = new Anagram($testWord, $anagramList);

        //Act
        $result = $test_Anagram->createAnagrams();

        //Assert
        $this->assertEquals(['hell'], $result);

    }



}
?>
