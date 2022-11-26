<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>

            <?php if(isset($_SESSION['tipo'])){?>
            <li><a href="clientes.php">Clientes</a></li>
            <?php } else if(isset($_SESSION['id'])) {?>
                <li><a href="#">Comfiguração</a></li>
            <?php } ?>
            
            
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>

            <?php if(isset($_SESSION['nome'])){?>
            <li style="flo"><a href="clienteConfiguracao.php">
                Bem vindo <?= substr($_SESSION['nome'], 0, strpos($_SESSION['nome'], " "));?>
            </a></li>
            <?php } ?>
        </ul>
    </nav>