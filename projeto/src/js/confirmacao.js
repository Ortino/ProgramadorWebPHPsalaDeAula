function confirmarApagar(id){
    var confirmar = confirm("Tem certeza que deseja excluir o registro de id" + id + "selecioonado?");

    if(confirmar){
        // console.log("confirmou apagar!");
        location.href="src/controler/cliente_bd/excluirCliente.php?id=" + id;
    }else {
        console.log("Cancelado!");
    }
}
if(nao_autorizado){
    var nao_autorizado = confirm("Você não está autorizado" + id);
}else {
    header("Location: ../../../index.php");
}