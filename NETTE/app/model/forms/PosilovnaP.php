<?php


namespace App\Presenters;


use Nette;

class PosilovnaP extends \NETTE\Application\UI\Form {


    public function __construct($parent , $name ) {
        parent::__construct($parent, $name);

    $this->addGroupProdukt (Produkt);

$this->addText(Nazev_Proteinu, Nazev Proteinu) -> setRequired (Je potreba zvolit);
->addRule(\NETTE\Forms\Form::REQUIRED, 'potreba zvolit');


$this->addTextArea(Nazev_Proteinu, Nazev Proteinu) -> setRequired (Je potreba zvolit);
->addRule(\NETTE\Forms\Form::REQUIRED, 'potreba zvolit');

    }
}