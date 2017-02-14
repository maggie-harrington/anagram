<?php

    class Anagram {

        private $word;
        private $wordsToCheck;

        function __construct($wordInput, $possibleAnagramList)
        {
            $this->word = $wordInput;
            $this->wordsToCheck = $possibleAnagramList;
        }

        function getWord()
        {
            return $this->word;
        }

        function getWordsToCheck()
        {
            return $this->wordsToCheck;
        }

        function createAnagrams()
        {
            // array returned of anagrams of user word form list
            $anagramList = array();

            $fullWord = $this->getWord();

            // Split word into an array of individual letters
            $fullWordExploded = str_split($fullWord);

            // Get list of words input by user
            $listOfWords = $this->getWordsToCheck();

            // Loop through each word in the word list
            foreach ($listOfWords as $wordtemp) {

                // Split each word into array of individual letters
                $individualWordArray = str_split($wordtemp);

                // looks to find all the values of individualwordarray inside of fullwordexploded and counts these values.  If the count is the same as the length of individual word array we've found an anagram.
                if (count(array_intersect($fullWordExploded, $individualWordArray)) == count($individualWordArray))
                {
                    array_push($anagramList, $wordtemp);
                }
            }
            return $anagramList;
        }
    }
 ?>
