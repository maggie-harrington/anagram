<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
    return $app['twig']->render('anagram.html.twig');
    });

    $app->post("/display_anagrams", function() use ($app) {
        $formWord = $_POST["word"];
        $fileWords = implode(' ', file('../data/wordlist2.txt'));

        $fileExplode = explode(" ", $fileWords);

        //$formWordList = $_POST["word-list"];
        $wordList = $fileExplode;
        //var_dump($wordList);

        //$wordList = explode(' ', $formWordList);
        $newAnagram = new Anagram($formWord, $wordList);
        $results = $newAnagram->createAnagrams();





    return $app['twig']->render('display_anagrams.html.twig', array('results' => $results));
    });

    return $app;
 ?>
