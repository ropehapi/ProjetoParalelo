<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoParalelo/VO/FuncionarioVO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProjetoParalelo/MODEL/FuncionarioDAO.php';

class FuncionarioCTRL{
    public function InserirFuncionario(FuncionarioVO $vo){
        $dao = new FuncionarioDAO;
        return $dao->InserirFuncionario($vo);
    }

    public function ConsultarFuncionarios()
    {
        $dao = new FuncionarioDAO;
        return $dao->ConsultarFuncionarios();
    }

    public function AlterarFuncionario($nome, $email, $endereco, $telefone,$id)
    {
        $dao =  new FuncionarioDAO;
        return $dao->AlterarFuncionario($nome,$email,$endereco,$telefone,$id);
    }

    public function ExcluirFuncionario($id){
        $dao = new FuncionarioDAO;
        return $dao->ExcluirFuncionario($id);    
    }

}