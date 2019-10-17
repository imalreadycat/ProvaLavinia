<?php

require_once ("modelo/AdicionarClienteModelo.php");

function adicionar (){
     if(ehPost()){
        $rg = $_POST['rg'];
        $nome = $_POST['nome'];
        
        $msg = adicionarC ($rg, $nome);
        echo $msg;
        
    }else{
        exibir("cliente/adicionarCliente");
    }
}

function listar(){
    
   $recebe = array(); 
   $recebe["clientesAdc"] = listarClientes();
   exibir("cliente/listar", $recebe);
}

function deletar ($id){
   
    deletarCliente($id); 
    
    redirecionar ("cliente/listar");

}

function editar($id){
     if(ehPost()){
        $rg = $_POST['rg'];
        $nome = $_POST['nome'];
        
        atualizar($id, $rg, $nome);
        
        redirecionar("cliente/listar");
    }else{
        
        $dados['cliente'] = editarCliente($id);
        exibir("cliente/editar", $dados);
    }
}