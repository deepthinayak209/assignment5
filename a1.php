<?php

echo "<h2> Program to find count</h2>";

$filename = "a5withdraw.php";
$document = fopen($filename, 'r');
$output   = fread($document, filesize("a5withdraw.php"));

//no.of lines in file
$lines = count(file($filename));
echo "The number of lines in '".$filename. "' is " .$lines;
echo "<br/>";

//no.of words
$word = str_word_count(file_get_contents("a5withdraw.php"));
echo "The number of words in '".$filename. "' is " .$word;
echo "<br/>";

//no.of characters
$chars = iconv_strlen($output);
echo "The number of characters in '".$filename. "' is " .$chars;
echo "<br/>";

//no.of vowels
$vowels = array("a","e","i","o","u");
$length = strlen($output);
$count  = 0;
for ($i = 0; $i < $length; $i++) 
{
	if (array_search($output[$i], $vowels)) 
	{
            $count++;
        }
}
$abc = $count + 1;
echo "The number of vowels in '".$filename. "' is " .$abc;

echo "<br/>";

//no.of consonant
for ($i = 0; $i < $length; $i++) 
{
	if (!array_search($output[$i], $vowels)) 
	{
            $count++;
        }
}
echo "The number of consonants in '".$filename. "' is " .$count;

echo "<br/>";

//no.of digits
$digits = array(1,2,3,4,5,6,7,8,9,0);
$length = strlen($output);
$count  = 0;
for ($i = 0; $i < $length; $i++) 
{
	if (array_search($output[$i], $digits)) 
	{
            $count++;
        }
}
echo "The number of digits in '".$filename. "' is " .$count;
echo"<br/>";

//no.of special chracters
$spch = array("@","#","$","%","&","*");
$length = strlen($output);
$count  = 0;
for ($i = 0; $i < $length; $i++) 
{
	if (array_search($output[$i], $spch)) 
	{
            $count++;
        }
}
echo "The number of special characters in '".$filename. "' is " .$count;
echo"<br/>";

//size of file
$size = filesize($filename);
echo "The number of size of file in '".$filename. "' is " .$size;
echo"<br/>";



fclose($document);
?>

