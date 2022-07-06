<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro( mensagem: 'O nome não pode ser vazio! Por favor preencha!');
        return false;
    }

    else if(strlen($nome) < 3)
    {
        setarMensagemErro( mensagem:'O nome deve conter mais que 3 caracteres');       
        return false;
    }

    else if(strlen($nome) > 40)
    {
        setarMensagemErro( mensagem:'O nome é muito extenso!');       
        return false;
    }
    return true;    
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro( mensagem:'Por favor informe um numero para idade!');    
        return false;
    }
    return true;

}