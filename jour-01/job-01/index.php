<?php

function my_str_search(string $haystack, string $needle) : int {

    $needle = 'needle';
    $haystack = 'haystack';
    
    $searchchar= $letter;
    $count="0"; //zero
 
    for($i="0"; $i<strlen($text); $i=$i+1){
 
        if($str[$i] == $searchchar){
        
        $count=$count+1;
        }
    }
    var_dump($count);
}
my_str_search( $needle, $letter );

?>