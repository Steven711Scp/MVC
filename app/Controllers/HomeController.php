<?php

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller{

    public function index(){

        $contactModel = new Contact();
        return $contactModel->create([
            'nombre' => 'María López',
            'email' => 'maria@gmail.com',
            'telefono' => '7777-2222'
        ]);
        

      return $this-> view('home', $data = [
        'title' => 'Home',
        'description' => 'Esta es la pagina Home'
      ]);
    }

    
}