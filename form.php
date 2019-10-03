<?php

$user= "Nicolo";
$pass= "1234ciao";


if ($user == $_POST["us"] && $pass == $_POST["pass"]){
    echo "Credenziali corrette";
} else{
    echo "Errore";
}



?>