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


        ?>
    </body>
</html>