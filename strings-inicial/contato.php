<?php

namespace Alura;

class Contato
{

    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;

        if($this->validaEmail($email) !== false) {
            $this->email = $email;
        } else {
            $this->email = "Email Inválido";
        }

        if ($this->validaTelefone($telefone)) {
            $this->telefone = $telefone;
        } else {
            $this->telefone = "Telefone Inválido, digite no formato 12346-7890 ";
        }

        $this->endereco = $endereco;
        $this->cep = $cep;

    }

    private function validaTelefone(string $telefone) : int
    {
        return preg_match('/^[0-9]{5}-[0-9]{4}$/', $telefone, $encontrados);
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false) {
            return "Usuario Inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEnderecoCep (): string
    {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function getTelefone (): string
    {
        return $this->telefone;
    }

}