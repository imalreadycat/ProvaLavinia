
<h2> Clientes adicionados com sucesso: </h2>
  
    <table>
        <tr>
            <th>Nome</th>
            <th>RG</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
        <?php foreach ($clientesAdc as $cliente):?>
        <tr>  
            <td><?=$cliente['nome']?></td>
            <td><?=$cliente['rg']?></td>
            <td><a href="./cliente/deletar/<?=$cliente['idCliente']?>">Deletar</a></td> 
            <td><a href="./cliente/editar/<?=$cliente['idCliente']?>">Editar</a></td>
        </tr>

        <?php endforeach;?>
    </table>

<h2> Agradecimento especial a Adrielly </h2>

<?php
// <td><a href="./cliente/deletar/<?=$cliente['idCliente']">Deletar</a></td>
//  cliente/deletar chama a função do controlador 