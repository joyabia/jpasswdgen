<?php
//error_reporting(-1); # Report all PHP errors
//ini_set('display_errors', 1);

Class Joypasswd{
 


public function passwdgen (){


//read an html file with English words to use for passwords into variable $html
$html = new \Htmldom('http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html');

//print_r($_REQUEST) ;

// Retrieve all li elements from $html and store words in array
foreach($html->find('li') as $e){
	$words[] = $e-> innertext;
}


$numwords = 2;
$separator = "+";

//randomly select array keys based on number of words
$wordcount = array_rand($words,$numwords);
$newpassword ="";
foreach($wordcount as $value){
	$newpassword .= $words[$value] ;
}


//$Password_String =  $newpassword;
$Password_String = trim($newpassword);
$Password_String = preg_replace('/\\s{2,}/', $separator, $Password_String);



//append the number at the end

$AppendNum = rand(0,10);

$Password_String = $Password_String.$AppendNum;

return $Password_String;
}
}