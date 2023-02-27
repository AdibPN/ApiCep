<?php

namespace App\Model;
use APICEP\DAO\EnderecoDao;
use Exception;

class EnderecoModel extends Model
{
    public $id_logradouro, $tipo, $descricao, $id_cidade, 
    $uf, $complemento, $descricao_sem_numero, $descricao_cidade, $codigo_cidade_ibge,
    $descricao_bairros;

    public $arr_cidades;

    public function gerLogradouroByCep(int $cep)
    {
        try 
        {
            $dao = new EnderecoDAO();
            return $dao->selectByCep($cep);

        }catch(Exception $e)
        {
            throw $e;

        }
    }

    public function getCepByLogradouro($logradouro)
    {
        try
        {
            $dao = new EnderecoDAO();
            $this->rows = $dao->selectCepByLogradouro($logradouro);


        } catch(Exception $e) {
            echo $e->getMessage();
        }

    }
}