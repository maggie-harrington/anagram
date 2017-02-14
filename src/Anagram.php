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
            // Sort array of letters alphabetically
            sort($fullWordExploded);

            // $wordLength = count($fullWordExploded);
            //
            // // This goes through the array and counts the number of times each value occurs, creating a key-value pair
            // $numLetterCount = array_count_values($fullWordExploded);

            // Get list of words input by user
            $listOfWords = $this->getWordsToCheck();



            // Loop through each word in the word list
            foreach ($listOfWords as $wordtemp) {
                // Split each word into array of individual letters
                $individualWordArray = str_split($wordtemp);
                // Sort array alphabetically
                sort($individualWordArray);
                // If the alphabetized letter arrays are equal, push the word from the word list into the return array.
                if ($individualWordArray == $fullWordExploded) {
                    array_push($anagramList, $wordtemp);
                }

            }

            return $anagramList;
        }


    }

 ?>
