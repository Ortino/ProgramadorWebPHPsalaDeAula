<?php
echo "Testando as funções die () e exit() em php";
die("Aplixação as funções die()");
echo "Linha exibida apenas se o script não for interrompido";
$senha = "123";
echo "Senha criptografada com MD5()" . md5 ($senha);
echo "<br>Senha cripotagrafada com password_has()" .
password_hash($senha, PASSWORD_DEFAULT);

$senhaCrip ;
if(password_verify($senha,$senhaCrip)){
    echo "<br>Senhas iguais!";
} else {
    echo"<br>Senhas diferantes";
}