<?php

namespace App\classes;

class Contato
{   
    /**
     * @var string
     */
    public string $name;
    /**
     * @var integer
     */
    public int $cellphone;
    /**
     * @var string
     */
    public string $email;

    /**
     * @var array string
     */
    public function __construct(string $name, int $cellphone, string $email){
        $this->name = $name;
        $this->cellphone = $cellphone;
        $this->email = $email;
    }   
}