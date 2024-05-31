<?php
class Personne {
// constructeur
    function __construct($nom, $prenom, $date_naissance) {
    $this->nom = $nom ;
    $this->prenom = $prenom ;
    $this->date_naissance = $date_naissance ;

}
// methodes
public function presenter() {
        return "je suis $this->nom $this->prenom $this->date_naissance" ;
    }
public function age() {
        $birthDate = new DateTime($this->date_naissance);
        $today = new DateTime();
        $age = $today->diff($birthDate)->y;
        return $age;}
   
}
$p1 = new Personne("aim", "youssef", "2000-03-13");
$p2 = new Personne("ali", "kabbour", "2001-06-14");
    // affichage
echo $p1->presenter() . " j'ai " . $p1 ->age()." ans." ."<br>";
echo $p2->presenter(). " j'ai " . $p2 ->age()." ans.\n";


?>