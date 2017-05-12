<?php

class Radioprogramma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje) {
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes(){
        return $this->liedjes;
    }

    public function getProgramma(){
        return array("naam" => $this->naam,
            "omschrijving" => $this->omschrijving);
    }

    public function setNaam($n) {
        if (strlen($n)>=2) {
            $this->naam = $n;
        }
    }

    public function setOmschrijving($o) {
        $this->omschrijving = $o;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getOmschrijving() {
        return $this->omschrijving;
    }


}
?>