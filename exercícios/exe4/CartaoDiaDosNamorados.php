<?php

class CartaoDiaDosNamorados extends CartaoWeb
{

    public function __construct(string $destinatario)
    {
        $this->destinatario = $destinatario;
    }
    public function retornarMensagem(string $remetente): string
    {
        return "Querida(o) " . $this->destinatario . ", </br> Feliz dia dos namorados!</br>De todo o meu coração</br>${remetente}";
    }
}