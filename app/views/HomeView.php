<?php

class HomeView {


   public function showHome (){
    require 'templates/header.phtml';

    require 'templates/footer.phtml';
    }

    public function showEror()  {
      require'templates/error.phtml';
    }
}