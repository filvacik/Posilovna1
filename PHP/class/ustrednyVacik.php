<?php


abstract class ustrednyVacik implements iustrednyVacik {

    protected $napetiVacik; // atribut ktery je pristupny jen ve tride a tridach dedicich

    //funkce pro ziskani hodnoty atributu implementovana z interfacu

    function getNapetiVacik() {
        return $this->napetiVacik;


}

//fuknce ktera nastavi hodnotu atributu implementovana z interfacu

    function setNapetiVacik($napetiVacik) {
        $this->napetiVacik = $napetiVacik;
    }




}

?>