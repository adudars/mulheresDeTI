<?php
    
    session_start();

    include("./models.php");
    include("./conexao.php");

    $conn = conexaoPg();
    if($_FILES){
        if($_FILES['foto']){
            $destino = "./imagens/upload/";
            $destino = $destino . basename($_FILES['foto']['name']);

            if(move_uploaded_file($_FILES['foto']['tmp_name'],$destino) != 0){
                $rows = updateFotoPessoa($conn, $_SESSION["id_login"], $_FILES['foto']['tmp_name'], $destino);
                unset($conn);

                if( $rows == 1 ){
                    header("Location: ../perfil.php");
                }else{
                    header("Location: ../perfil.php");
                }
            };
            
        }

    }
    header("Location: ../perfil.php");

?>