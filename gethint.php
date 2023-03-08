<?php
// Array with names
$a[] = "Muranga Intake Is Available";
$a[] = "Nairobi  Intake Not  available";
$a[] = "Nyeri  Intake Not  available";
$a[] = "Kirinyaga  Intake Not  available";
$a[] = "Nyeri  Intake Not available";
$a[] = "Laikipia  Intake Not  available";
$a[] = "Nakuru  Intake Not  available";
$a[] = "Machakos  Intake Not available";
$a[] = "Kericho  Intake Not  available";
$a[] = "Mombasa  Intake Not  available";
$a[] = "Baringo  Intake Not  available";
$a[] = "Lamu  Intake Not  available";
$a[] = "Kirifi  Intake Not  available";
$a[] = "Kiambu  Intake Not available";
$a[] = "Turkana  Intake Not  available";
$a[] = "Taita Taveta  Intake Not  available";
$a[] = "Uasin Gishu  Intake Not  available";
$a[] = "Nandi  Intake Not  available";
$a[] = "Marsabit  Intake Not  available";
$a[] = "Kitui  Intake Not  available";
$a[] = "Nyandarua  Intake Not  available";
$a[] = "Kajiando  Intake Not  available";
$a[] = "Kisumu  Intake Not  available";
$a[] = "Bomet  Intake Not  available";
$a[] = "Kitale Bursary not available";
$a[] = "Voi  Intake Not  available";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?> 