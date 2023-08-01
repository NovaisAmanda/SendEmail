<?php
 session_start();


include 'includes/conexao.php';

$idProduto= $_POST['id_produto'];

if(!isset($idProduto) || $idProduto == ""){
    echo 'Insira um código';
} else{
    $sql_code= "SELECT * FROM produto WHERE id_produto=$idProduto";
    $sql_query= $mysqli->query($sql_code) or die ("falha na execução do código SQL: ". $mysqli->error);

    $quant= $sql_query->num_rows;

    if($quant==1){ 
        $usuario= $sql_query->fetch_assoc(); 
        ?>
            <table class="table__buscar">
                <thead class="thead__buscar">
                    <tr>
                    <th scope="col" class="th__buscar">Nome do Produto</th>
                    <th scope="col" class="th__buscar">Preço do Produto</th>
                    <th scope="col" class="th__buscar">Descrição do produto</th>
                    <th scope="col" class="th__buscar">Data da Fabricação</th>
                    <th scope="col" class="th__buscar">Quantidade de Produto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $usuario['nome_produto'] . '<br>'; ?></td>
                        <td><?php echo $usuario['preco_produto'] . '<br>'; ?></td>
                        <td><?php echo $usuario['descricao_produto'] . '<br>'; ?></td>
                        <td><?php echo $usuario['fabricacao_produto'] . '<br>'; ?></td>
                        <td><?php echo $usuario['quantidade_produto'] . '<br>'; ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        // botao para enviar email
        echo '<form  method="post" name="enviarEmail" id="enviarEmail" value="enviarEmail">
                    <input type="submit"  value= "retornoTeste" name= "retornoTeste" id="retornoTeste" class="enviarEmailButton">     
                    <input type="submit" value= "enviarConserto" name= "enviarConserto" id="enviarConserto" class="enviarEmailButton">        
              </form';
        $_SESSION['id_produto']       = $usuario['id_produto'];
        $_SESSION['nome_produto']       = $usuario['nome_produto'];
        $_SESSION['preco_produto']      = $usuario['preco_produto'];
        $_SESSION['descricao_produto']  = $usuario['descricao_produto'];
        $_SESSION['fabricacao_produto'] = $usuario['fabricacao_produto'];
        $_SESSION['quantidade_produto'] = $usuario['quantidade_produto'];
    } else{
        echo 'Produto não cadastrado!';
    }
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
