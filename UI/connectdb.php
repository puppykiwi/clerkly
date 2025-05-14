<?php

try {
    $pdo = new PDO('mysql:host:localhost;dbname:clerkly','clerkly','0700479408');
} catch (PDOException $e) {

echo $e->getMessage(); 
}

echo'connected';

?>