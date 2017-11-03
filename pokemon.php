<?php

class Pokemon {
    public $nom;
    public $santé;
    public $attaque;
    public $défense;

    function __construct ($nom, $santé, $attaque, $défense)
    {
        $this->nom = $nom;
        $this->santé = $santé;
        $this->attaque = $attaque;
        $this->défense = $défense;
    }

    public function est_KO ()
    {
        if ($this->santé <= 0)
        {
            echo "<p>$défenseur->nom est KO !</p>";
        }
    }
}

$pikachu = new Pokemon ("Pikachu", 25, 15, 10);
$bulbizarre = new Pokemon ("Bulbizarre", 30, 8, 20);

function attaque ($attaquant, $défenseur)
{
    echo "$attaquant->nom attaque $défenseur->nom";

    if ($attaquant->attaque >= $défenseur->défense)
    {
        $coup = $attaquant->attaque - $défenseur->défense + 1;
        $défenseur->santé -= $coup;
        echo "<p>$défenseur->nom perd $coup PV, il lui reste $défenseur->santé PV</p>";
    }
    else
    {
        $coup = ($défenseur->défense - $attaquant->attaque) / 2;
        $attaquant->santé -= $coup;
        $défenseur->défense--;
        echo "<p>$défenseur->nom perd 1 point de défense, il lui reste $défenseur->défense points de défense</p>";
        echo "<p>$attaquant->nom perd $coup PV, il lui reste $attaquant->santé PV</p>";
    }
    
    $défenseur->est_KO ();
    $attaquant->est_KO ();
    
}

attaque ($pikachu, $bulbizarre);
attaque ($bulbizarre, $pikachu);

?>