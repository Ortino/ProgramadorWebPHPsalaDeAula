<?php
//https://campuscode.com.br/conteudos/o-calculo-do-digito-verificador-do-cpf-e-do-cnpj#:~:text=O%20c%C3%A1lculo%20de%20valida%C3%A7%C3%A3o%20do,2%20e%20somamos%20esse%20resultado.
//Desafio implementar a valido 
function verifica_cpf($cpf){
    // $sum = 14; 
    // $result = (($sum * 10) % 11);
    
    // $cpf = preg_replace("[0-9]", " ", $cpf); 
    // $tipo_dado = NULL; 
    // if(strlen($cpf)==11){ $tipo_dado = "cpf"; };

    $cpf = str_replace(".", "", $cpf);
    $cpf = str_replace("-", "", $cpf);
    $cpf_v = str_split($cpf);
    // for | do while | while | foreach
    //     111.222.333-44
    //   X 1  1 1 2 2 2 3 3 3 4 4 
    //   X 10 9 8 7 6 5 4 3 2 1 0 
    //     $resultado = total % 11;
    //     10 ou 11 = 0
    //     $resultado < 2 = 0
    return true;
} 

