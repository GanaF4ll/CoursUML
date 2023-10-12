<?php 
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Fall', $solde = 2400) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

}
?>
