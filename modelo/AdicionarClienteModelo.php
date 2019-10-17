<?php

function adicionarC ($rg, $nome){
    $comando= "call cadastrarCliente ($rg,'$nome')";
    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar cliente'. mysqli_error($cnx)); }
return 'Cliente cadastrado com sucesso!';
}

function listarClientes(){
    $comando= "call listarClientes()";
    
    $result = mysqli_query(conn(), $comando);
    $clientes = array();
    while($linha = mysqli_fetch_assoc($result)){
        $clientes[] = $linha;
    }
    return $clientes;
}

function deletarCliente($id){
    
    $comando= "call deletarClienteId($id)";
    
    $conexao= conn();
    $resultado= mysqli_query($conexao, $comando);
   
     if($resultado==true){
       echo "Deu certo!";
   }else {
       echo "Deu errado";
   }
}

function editarCliente($id, $rg, $nome){
    $comando= "call editarCliente($id, $rg, '$nome')";
    
    echo "O comando é tan tan: [" . $comando . "]";
    
    $resultado= mysqli_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao atualizar os dados do cliente'. mysqli_error($cnx)); }
    return 'Dados atualizados com sucesso!';
}