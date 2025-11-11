<?php

$Vraag = readline("Wat wil je doen + , - , * of / . ");

$Eerste = readline("Eerste getal? ");
$Tweede = readline("Tweede getal? ");

if ($Vraag == "+") {
    echo $Eerste . "+" . $Tweede . "= ";  
    echo ($Eerste + $Tweede);
}

if ($Vraag == "-") {
    echo $Eerste . "-" . $Tweede . "= ";  
    echo ($Eerste - $Tweede);
}

if ($Vraag == "*") {
    echo $Eerste . "*" . $Tweede . "= ";  
    echo ($Eerste * $Tweede);
}

if ($Vraag == "*") {
    echo $Eerste . "/" . $Tweede . "= ";  
    echo ($Eerste / $Tweede);
}

?>