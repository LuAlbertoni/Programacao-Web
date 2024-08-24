<?php

namespace POO\Dados;

class Usuario
{
    public $email = "email@exemplo.com";

    public function exibirEmail()
    {
        echo $this->email;
    }
}
