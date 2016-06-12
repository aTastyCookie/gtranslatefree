<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('GoogleTranslate.class.php');

$source1 = 'en';
$target1 = 'fr';
$text1 = "sometext";

$translation1 = GoogleTranslate::translate($source1, $target1, $text1);

echo '<b>source text</b>';
echo '<textarea style="width:100%" rows="10">';
print_r($text1);
echo '</textarea><br><hr>';

/*echo 'translated text 1';
echo '<pre>';
print_r($translation1);
echo '</pre>';*/

$source2 = 'fr';
$target2 = 'en';
$text2 = $translation1;

$translation2 = GoogleTranslate::translate($source2, $target2, $text2);

echo '<b>formated text</b>';
echo '<textarea style="width:100%" rows="10">';
print_r($translation2);
echo '</textarea>';
