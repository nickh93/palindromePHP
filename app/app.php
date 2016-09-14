<?php

    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/PalindromeChecker.php");


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("palindrome_form.html.twig");
    });

    $app->get("/palindrome_result", function() use($app) {
        $palindromeCheck = new PalindromeChecker($_GET["input_word"]);
        $word = $palindromeCheck->getCheckWord();

        $result = $palindromeCheck->checkIfPalindrome();

        return $app["twig"]->render("palindrome_result.html.twig", array("checked_word" => $word, "is_palindrome" => $result));
    });

    return $app;

 ?>
