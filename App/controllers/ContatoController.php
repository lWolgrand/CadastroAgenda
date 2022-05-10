<?php 
namespace App\controllers;


/**
 * Class ContatoController
 * @package App\controllers
 * */

  class ContatoController extends BaseController
  {
    /**
     * @return array
     */
    public function index(): array
    {
      return [
        'nome' => 'Contato',
        'dados' => [
          'nome' => '',
          'email' => '',
          'telefone' => '',
          'mensagem' => '',
        ]
      ];
    }
    
