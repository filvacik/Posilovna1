<?php


namespace App\Presenters;


class PosilovnaPresenter extends BasePresenter{

    public function renderDefault() {

    }

    public function createComponent($name) {
    return new \forms\PosilovnaP($this, $name);
}

}