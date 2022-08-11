<?php

abstract class CartaoWeb
{

    protected string $destinatario;

    public abstract function retornarMensagem(string $remetente): string;
}