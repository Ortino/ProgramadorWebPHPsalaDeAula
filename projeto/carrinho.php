<?php
if(isset($_GET['adicionar'])){
        // vamos adiconar ao carrinho
        $iditem = (int) $_GET ['adicionar'];

        if($estoque['idproduto'] == $id){ // Marretado **Refatadora
            // echo "O produto existe!"
            if (isset($_SESSION['carrinho'][$iditem])){
                $_SESSION['carrinho'][$iditem]['qtd']++;
                // echo "Existe Sessão!";
            }else{
                // echo "NÃO Existe Sessão!";
                $_SESSION['carrinho'][$iditem] = array(
                'idEstoque' => $iditem, 
                'produto' => $objEstoque->getProduto()->getNome(), 
                'valor' => $objEstoque->getValorVenda(),
                'qtd' => 1);
                // echo "<br>". var_dump($_SESSION);
            }
            // echo "O produto existe!";
        } else {
            die ('Você não pode adicionar um item que não existe. ');
        }
    }
//------------------------------------------------------------------------------------------------------------------

        if(isset($_SESSION['carrinho'])){
            // var_dump($_SESSION['carrinho']);
            foreach($_SESSION['carrinho'] as $key => $value){
                echo "<br>";
                echo "Produto:" . $value['produto'];
                echo "<br>";
                echo "Key" . $key;
                echo "<br>";
                echo "QTD" . $value['qtd'];
                echo "<br>";
                echo "Valor" . $value['valor'];
                echo "<br>";
                echo "Valor X QTD " . number_format($value['valor'] * $value['qtd'], 2, ',', '.');
                echo "<br><hr>";
            }
        } else {
            echo "Carrinho: " . isset($_SESSION['carrinho']);
        }
?>