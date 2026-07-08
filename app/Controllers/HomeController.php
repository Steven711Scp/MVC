<?php

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller{

    public function index(){

        $contactModel = new Contact();
        $contactModel->delete(5);
        return "Eliminado";
        

      return $this-> view('home', $data = [
        'title' => 'Home',
        'description' => 'Esta es la pagina Home'
      ]);
    }

    
}

// el final ? Terminado 