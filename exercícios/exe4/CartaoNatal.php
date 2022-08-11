<?php

class CartaoNatal extends CartaoWeb
{

    public function __construct(string $destinatario)
    {
        $this->destinatario = $destinatario;
    }
    public function retornarMensagem(string $remetente): string
    {
        return "Caro(a) " . $this->destinatario . "</br>Desejo a você um feliz natal</br>Atenciosamente</br>$remetente";
    }
}