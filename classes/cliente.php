<?php

class Cliente
{
    private $clie_cod; 
    private $clie_nome; 
    private $clie_email; 
    private $clie_nomeFantasia; 
    private $clie_telefone; 
    private $clie_CNPJ;
    private $clie_tipo;
    private $clie_situacao; 
    private $clie_dataContrato; 
    private $clie_rua; 
    private $clie_num; 
    private $clie_bairro; 
    private $clie_complemento; 
    private $clie_cidade; 
    private $clie_uf;
    private $clie_obs; 


    public function getClie_cod()
    {
        return $this->clie_cod;
    }

    public function setClie_cod($clie_cod)
    {
        $this->clie_cod = $clie_cod;

        return $this;
    }

    public function getClie_nome()
    {
        return $this->clie_nome;
    }

    public function setClie_nome($clie_nome)
    {
        $this->clie_nome = $clie_nome;

        return $this;
    }

    public function getClie_email()
    {
        return $this->clie_email;
    }

    public function setClie_email($clie_email)
    {
        $this->clie_email = $clie_email;

        return $this;
    }

    public function getClie_nomeFantasia()
    {
        return $this->clie_nomeFantasia;
    }

    public function setClie_nomeFantasia($clie_nomeFantasia)
    {
        $this->clie_nomeFantasia = $clie_nomeFantasia;

        return $this;
    }

    public function getClie_telefone()
    {
        return $this->clie_telefone;
    }

    public function setClie_telefone($clie_telefone)
    {
        $this->clie_telefone = $clie_telefone;

        return $this;
    }

    public function getClie_CNPJ()
    {
        return $this->clie_CNPJ;
    }

    public function setClie_CNPJ($clie_CNPJ)
    {
        $this->clie_CNPJ = $clie_CNPJ;

        return $this;
    }

    public function getClie_tipo()
    {
        return $this->clie_tipo;
    }

    public function setClie_tipo($clie_tipo)
    {
        $this->clie_tipo = $clie_tipo;

        return $this;
    }

    public function getClie_situacao()
    {
        return $this->clie_situacao;
    }

    public function setClie_situacao($clie_situacao)
    {
        $this->clie_situacao = $clie_situacao;

        return $this;
    }

    public function getClie_dataContrato()
    {
        return $this->clie_dataContrato;
    }

    public function setClie_dataContrato($clie_dataContrato)
    {
        $this->clie_dataContrato = $clie_dataContrato;

        return $this;
    }

    public function getClie_rua()
    {
        return $this->clie_rua;
    }

    public function setClie_rua($clie_rua)
    {
        $this->clie_rua = $clie_rua;

        return $this;
    }

    public function getClie_num()
    {
        return $this->clie_num;
    }

    public function setClie_num($clie_num)
    {
        $this->clie_num = $clie_num;

        return $this;
    }

    public function getClie_bairro()
    {
        return $this->clie_bairro;
    }

    public function setClie_bairro($clie_bairro)
    {
        $this->clie_bairro = $clie_bairro;

        return $this;
    }

    public function getClie_complemento()
    {
        return $this->clie_complemento;
    }

    public function setClie_complemento($clie_complemento)
    {
        $this->clie_complemento = $clie_complemento;

        return $this;
    }

    public function getClie_cidade()
    {
        return $this->clie_cidade;
    }

    public function setClie_cidade($clie_cidade)
    {
        $this->clie_cidade = $clie_cidade;

        return $this;
    }

    public function getClie_uf()
    {
        return $this->clie_uf;
    }

    public function setClie_uf($clie_uf)
    {
        $this->clie_uf = $clie_uf;

        return $this;
    }

    public function getClie_obs()
    {
        return $this->clie_obs;
    }

    public function setClie_obs($clie_obs)
    {
        $this->clie_obs = $clie_obs;

        return $this;
    }
}