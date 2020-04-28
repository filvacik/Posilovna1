<?php


namespace App\Presenters;


use Nette;

class PosilovnaP extends \NETTE\Application\UI\Form {


    public function __construct($parent , $name ) {
        parent::__construct($parent, $name);

    $this->addGroupProdukt (Produkt);

$this->addText(Nazev_Proteinu, Nazev Proteinu) -> setRequired (Je potreba zvolit)
->addRule(\NETTE\Forms\Form::REQUIRED, 'potreba zvolit');


$this->addTextArea(Nazev_Proteinu, Nazev Proteinu) -> setRequired (Alespon 3 znaky)
->addRule(\NETTE\Forms\Form::MIN_LENGHT, 'alespon 3 znaky musi obsahovat');

$this->addImage (Fotka, Fotka);

$this->addText(Cena_bez_DPH, Cena bez DPH) -> setRequired (Musi byt cislo)
->addRule(\NETTE\Forms\Form::INTEGER, 'musi byt cislo');

$this->addText(Cena_s_DPH, Cena s dph) -> setRequired (Musi byt cislo)
->addRule(\NETTE\Forms\Form::INTEGER, 'musi byt cislo');

$this->addText(Gramaz, Gramaz) -> setRequired (Musi byt cislo)
->addRule(\NETTE\Forms\Form::INTEGER, 'musi byt cislo');

$this->addSelect(Prichut, Prichut, array ('Cokolada' , 'Jahoda' , 'Merunka'))
->addRule(\NETTE\Forms\Form::REQUIRED, 'prichut musi byt vybrana');

$this->addSelect(Vyber_hmotnosti, Vyber hmotnosti, array ('500g' , '1Kg' , '2Kg'))
->addRule(\NETTE\Forms\Form::REQUIRED, 'hmotnost musi byt vybrana');

$this->addSelect(Baleni, Baleni, array ('Sacek' , 'Pixla' , 'Sklenice'))
->addRule(\NETTE\Forms\Form::REQUIRED, 'baleni musi byt vybrano');

$this->addText(Pocet_kusu, Pocet kusu)->setRequired ('musi byt cislo od 1 do 50')
->addRule(\NETTE\Forms\Form::INTEGER, 'cislo od 1 do 50');

$this->addRadioList(Stav, Stav , array ('Nove' , 'Pouzite' , 'Zanovni'))
->addRule(\NETTE\Forms\Form::REQUIRED, 'povinny vyber');

$this->addSelect(Darkove_baleni, Darkove baleni , array ('Ano' , 'Ne'))
->addRule(\NETTE\Forms\Form::REQUIRED, 'povinny vyber');

$this->addCheckbox(Nakup, Velkoobchod)->setRequired (povinny vyber)
->addRule(\NETTE\Forms\Form::REQUIRED, 'povinny vyber');

$this->addUpload (zvuk, zvuk);

$this->addGroup('kontaktni udaje');

$this->addEamil(Email, Email)->setRequired('Email je potreba vyplnit')
    ->addRule(\NETTE\Forms\Form::EMAIL, 'Email neni platny');

    $this->addPassword(heslo, heslo )->setRequired('Min 8 znaku')
->addRule (\NETTE\Forms\Form::MIN_LENGTH, 'musi obsahovat min 8 y';

$this->addPassword('heslo2' , 'znova heslo') ->setRequired('Heslo znova')
->setAtribute('Placeholder' , 'zadaj znova heslo');
->addRule(\NETTE\Forms\Form::EQUAL, 'heslo neni stejne' , $this{'heslo'});

$this->addSubmit("ulozit" , "ulozit")->setRequired('musite kliknout')
    $addRule(\NETTE\Forms\Form::REQUIRED, 'musite kliknout');

$this->onSuccess[] = [$this, 'formSubmitted'];

    }

    public function formSubmitted ($form) {

    $values = $this->getValues(true);
    dump($values);
}
