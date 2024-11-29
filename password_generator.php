<?php
 function generatePassword($length, $lowercase, $uppercase, $numbers, $symbols) {

    //lowercase characters
    $lowercaseCharacters = "abcdefghijklmnopqrstuvwxyz";
    //uppercase characters
    $uppercaseCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //numbers
    $allnumbers = "0123456789";
    //symbols
    $allsymbols = "!@#$%^&*()_+-=[]{}|;':\",./<>?";



    $characters = "";

    if($lowercaseCharacters){
       $characters.= $lowercaseCharacters;
     }
     
      if($uppercaseCharacters){
     
     $characters.= $uppercaseCharacters;
    }

    if($allnumbers){
    
         $characters.= $allnumbers;
     }
     

      if($allsymbols){
    
         $characters.= $allsymbols;
     }

     $shuffled = str_shuffle($characters);

     $passward =substr($shuffled,0,$length);

     return $passward;
 }


 $generatedPassword = generatePassword(14, true, false, true, true);
echo $generatedPassword;
 ?>