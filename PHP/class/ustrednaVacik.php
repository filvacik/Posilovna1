<?php


class ustrednaVacik extends ustrednyVacik
{

// konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
    const TYPE = 1;


    //funkce pro ziskani hodnoty atributu
    public function getNapetiVacik()
    {
        return $this->napetiVacik;

    }


//fuknce ktera nastavi hodnotu atributu

    public function setNapetiVacik($napetiVacik)
    {
        $this->napetiVacik = $napetiVacik;

    }
}
