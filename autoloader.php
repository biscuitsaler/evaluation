<?php
require 'classChat.php'; // J'inclus la classe.

// je définis mes 3 chats avec les informations
    $monChat1 = new Chat("jacky",3,"blanc","male","siamois");
    $monChat2 = new Chat("sushi",5,"noir","femelle","persan");
    $monChat3 = new Chat("garfield",2,"roux","male","ocicat");

    
    echo "Bonjour je suis" . get_class($monChat1). "  " . $monChat ->prenom() . "et j'ai" . $monChat ->age() . "je suis" . $monChat ->couleur() . "de sexe" . $monChat ->sexe() . "et de race" . $monChat ->race();
    echo "Bonjour je suis" . get_class($monChat2). "  " . $monChat ->prenom() . "et j'ai" . $monChat ->age() . "je suis" . $monChat ->couleur() . "de sexe" . $monChat ->sexe() . "et de race" . $monChat ->race();
    echo "Bonjour je suis" . get_class($monChat3). "  " . $monChat ->prenom() . "et j'ai" . $monChat ->age() . "je suis" . $monChat ->couleur() . "de sexe" . $monChat ->sexe() . "et de race" . $monChat ->race();
    

     