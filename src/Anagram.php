<?php

    class Anagram {

        private $word;
        private $wordsToCheck = array("a", "ha", "ah", "la", "all");

        function __construct($wordInput)
        {
            $this->word = $wordInput;
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
            $anagramList = array();
            $fullWord = $this->getWord();
            $fullWordExploded = str_split($fullWord);
            $listOfWords = $this->getWordsToCheck();
            // Find one-letter words
            // Loop through each letter in the word
            foreach ($fullWordExploded as $letter) {
                // Loop through each word in the word list
                foreach ($listOfWords as $wordtemp) {
                    if ($letter == $wordtemp)
                    {
                        array_push($anagramList, $wordtemp);
                    }
                }
            }
            // Find two-letter words
            foreach ($fullWordExploded as $letter) {
                foreach ($fullWordExploded as $letter2)
                {
                    $combo = $letter . $letter2;
                    // Loop through each word in the word list and look to see if two-letter combo is in the word list
                    foreach ($listOfWords as $wordtemp) {
                        if ($combo == $wordtemp)
                        {
                            if (in_array($wordtemp, $anagramList) == false)
                            {
                                array_push($anagramList, $wordtemp);

                            }
                        }
                    }
                }
            }

            return $anagramList;
        }


    }

 ?>
