<?php

interface IRepositorio
{
    public function guarda(IPessoa $pessoa): void;
    public function recupera(string $cpf): IPessoa|null;
    public function primeiro(): void;
    public function proximo(): void;
}