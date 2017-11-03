<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tuons du reptilien !</title>
    </head>
    <body>
        <?php
            $nom_reptilien = "Vetu";
            $prénom_reptilien = "Guillaume";
            $âge_reptilien = "20";
            $santé_reptilien = 100;
            $santé_mort = 0;

            echo "Bonjour, je vais tuer le reptilien " . $prénom_reptilien . " " . $nom_reptilien . " ! ";
            echo "<br/>";
            echo "Il n'est pas vieux, il a $âge_reptilien ans. ";
            echo "<br/>";
            echo "Il est ";
            if ($âge_reptilien >= 18)
            {
                echo "majeur. ";
            }
            elseif ($âge_reptilien > 15) 
            {
                echo "ado. ";
            }
            else
            {
                echo "enfant. ";
            }
            echo "<br/>";
            echo "Il adore manger du chien. ";
            echo "<br/>";

            echo $santé_reptilien <=> $santé_mort, "<br />1 <=> 2 : " ,1 <=> 2, "<br />2 <=> 1 : ", 2 <=> 1;
            echo "<br />";

            // Déclaration de variables
            $a = null;
            $b = 2;
            $c = 5;
            $d;

            echo '$a=null, $b=2, $c=5, $d  =>  $a ?? $b ?? $c ?? $d : ', $a ?? $b ?? $c ?? $d;
            echo "<br/>";

            // L'arithmétique
            $a = 5;
            $b = $a + 5;
            echo "a vaut $a, b vaut $b<br />";

            $b = $a += 5;
            echo "a vaut $a, b vaut $b<br />";

            echo '++$a vaut ', ++$a, ' , $a++ vaut ', $a++,  ' , $a vaut ', $a, "<br />";
            echo "<pre>Ce code n'est pas interprété…\n…du tout</pre>";
            echo "<pre>";
            print_r ($a);
            echo "</pre>";
            echo "<pre>";
            var_dump ($a);
            echo "</pre>";
            $tableau = ["couleur" => "rouge", "taille" => 1.70];
            echo "<pre>";
            var_dump ($tableau);
            echo "</pre>";

            die("fin");
        ?>
    </body>
</html>