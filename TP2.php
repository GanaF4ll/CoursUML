<?php 
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Fall', $solde = 2400) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($somme) {
        $this->solde += $somme;
    }

    public function retrait($somme) {
        if ($somme <= $this->solde) {
            $this->solde -= $somme;
        } else {
            echo "Fonds insuffisants.";
        }
    }

}
?>