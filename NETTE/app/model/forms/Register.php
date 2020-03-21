<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Toonws | Templates
 * and open the template in the editor.
 */
namespace App\Presenters;

class Register extends \Nette\Application\UI\Form{

public function __construct($parent = NULL, $name = NULL) {
    parent:: __construct ($parent, $name);
    
    
    
    $this->setAction($parent -> link("Vacik:success"));
    $this->setMethod("POST");
    
    
    
    $this->addText("Nazev_produktu","Nazev produktu");
    $this->addTextArea("Popis_produktu","Popis produktu");
    $this->addUpload("neco","Obrazek produktu");
    $this->addText("cenabezDPH","cena bez DPH");
    $this->addText("cenasDPH","cena s DPH");            
    $this->addSelect("doprava","Vyber zpusob dopravy", array("CP","PPL"));
    $this->addText("DPH","Cena dopravy");
    $this->addSelect("kategorie","Vyber pocet kusu", array("1","2","3"));
    $this->addRadioList("produkt","prichut",array ("cokolada","vanilka  "));
    $this->addText("pocet_kusus_skladem", "Pocet kusu skladem");
    $this->addText("celkemcena", "Celkova cena za objednavku");
    $this->addCheckbox("stav","Souhlas se zpracovanim osobnich udaju") ;
    $this->addSubmit("ulozit", "Odeslat objednavku");
    
     
    

    $this->addText ('Prihlaeni','Prihlasovaci jmeno');
    $this->addPassword ('Heslo','Heslo');
    $this->addPassword ('Heslo2','Overeni hesla');
    $this->addCheckbox("prihlaseni","Zustat prihlaseny");
    $this->addSubmit("prihlasit", "Prihlasit se");
            return $this;
    
    
    
}
}