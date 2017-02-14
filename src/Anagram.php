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

        function setWordsToCheck()
        {
            // This is empty for now but will be filled later with list from text file.
            $this->wordsToCheck = "";
        }

        function createAnagrams()
        {
            // array returned of anagrams of user word form list
            $anagramList = array();

            $fullWord = $this->getWord();
            $fullWordExploded = str_split($fullWord);
            $wordLength = count($fullWordExploded);

            // This goes through the array and counts the number of times each value occurs, creating a key-value pair
            $numLetterCount = array_count_values($fullWordExploded);
            $listOfWords = $this->getWordsToCheck();

            // put array of possible anagrams in order
            sort($listOfWords);

            // not

            // possible word in wordarray is ton
            for ($x = 0; $x < $wordLength; $x++){

                // Loop through each word in the word list
                foreach ($listOfWords as $wordtemp) {

                    foreach ($fullWordExploded as $letter){
                        if($letter == $wordtemp[$x]){
                            array_push($anagramList, $wordtemp);
                        }
                    }

                }

            }


            return $anagramList;
        }


    }

 ?>
