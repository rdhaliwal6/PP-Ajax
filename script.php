<?php
/*
Rajpreet Dhaliwal
3/6/2020
*/
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
var_dump($_POST);
$term = $_POST['terms'];
searchFor($term);

function searchFor($term)
{
    $terms = array(
        "ajax" => "a Greek hero in the Trojan War who rescued the body of Achilles
    and killed
himself out of jealousy when Odysseus was awarded the armor
of Achilles.",
        "button" => "a small disk, knob, or the like for sewing or otherwise
attaching to an article, as of clothing, serving as a fastening when passed
through a buttonhole or loop.",
        "load" => "anything put in or on something for conveyance or
transportation; freight; cargo.",
        "java" => "a high-level programming language developed by Sun Microsystems.",
        "php" => "an HTML-embedded Web scripting language."
    );
    return $terms[array_search($term, $terms)];
}