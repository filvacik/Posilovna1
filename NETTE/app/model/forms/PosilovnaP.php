<?php


namespace App\Presenters;


use Nette;

class PosilovnaP extends \NETTE\Application\UI\Form {


    public function __construct($parent , $name ) {
        parent::__construct($parent, $name);

    $this->addGroupProdukt (Produkt);

$this->addText(Nazev_Proteinu, Nazev Proteinu) -> setRequired (Je potreba zvolit);
->addRule(\NETTE\Forms\Form::REQUIRED, 'potreba zvolit');


$this->addTextArea(Nazev_Proteinu, Nazev Proteinu) -> setRequired (Alespon 3 znaky);
->addRule(\NETTE\Forms\Form::MIN_LENGHT, 'alespon 3 znaky musi obsahovat');

$this->addImage (Fotka, Fotka);

$this->addText(Cena_bez_DPH, Cena bez DPH) -> setRequired (Musi byt cislo);
->addRule(\NETTE\Forms\Form::INTEGER, 'musi byt cislo');

$this->addText(Cena_s_DPH, Cena s dph) -> setRequired (Musi byt cislo);
->addRule(\NETTE\Forms\Form::INTEGER, 'musi byt cislo');

$this->addText(Gramaz, Gramaz) -> setRequired (Musi byt cislo);
->addRule(\NETTE\Forms\Form::INTEGER, 'musi byt cislo');

$this->addSelect(Prichut, Prichut, array ('Cokolada' , 'Jahoda' , 'Merunka'));
->addRule(\NETTE\Forms\Form::REQUIRED, 'prichut musi byt vybrana');

$this->addSelect(Vyber_hmotnosti, Vyber hmotnosti, array ('500g' , '1Kg' , '2Kg'));
->addRule(\NETTE\Forms\Form::REQUIRED, 'hmotnost musi byt vybrana');

$this->addSelect(Baleni, Baleni, array ('Sacek' , 'Pixla' , 'Sklenice'));
->addRule(\NETTE\Forms\Form::REQUIRED, 'baleni musi byt vybrano');

$this->addText(Pocet_kusu, Pocet kusu)->setRequired ('musi byt cislo od 1 do 50');
->addRule(\NETTE\Forms\Form::INTEGER, 'cislo od 1 do 50');

$this->addRadioList(Stav, Stav , array ('Nove' , 'Pouzite' , 'Zanovni'));
->addRule(\NETTE\Forms\Form::REQUIRED, 'povinny vyber');

$this->addSelect(Darkove_baleni, Darkove baleni , array ('Ano' , 'Ne'));
->addRule(\NETTE\Forms\Form::REQUIRED, 'povinny vyber');

$this->addCheckbox(Nakup, Velkoobchod)->setRequired (povinny vyber);
->addRule(\NETTE\Forms\Form::REQUIRED, 'povinny vyber');

    }
}