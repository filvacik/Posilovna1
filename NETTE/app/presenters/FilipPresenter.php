<?php
 

namespace App\Presenters ;

class FilipPresenter extends BasePresenter{
public function renderDefault() {

}
public function createComponentRegister($name) {
    return new Register($this , $name);
}
}


