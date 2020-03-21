<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;




class ObchodPresenter extends BasePresenter {
    
    
   public function createComponent($obchod) {
      return new \FilipObchod($this, $name);
   }


public function actionSucces($name){
    $odeslat = $this ->getRequest();
    
    $this ->template->odeslat = $odeslat->post;
}
}
