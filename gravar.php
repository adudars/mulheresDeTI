<?php
    $_SERVER['HTTP_HOST']
    include 'conexão.php';
    /*TESTE*/
    $query = 'select * from pessoa';
    $result = pg_query($query) or die ('Consulta falhou'.pg_last_error()
    echo "<table>\n";
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";

    /*CADASTRO*/
    $nm = $_REQUEST["nome"]
    $snm = $_REQUEST["sobrenome"]
    $eml = $_REQUEST["email"]
    $snh = $_REQUEST["senha"]

    pg_query("$insert into pessoa(nome,sobrenome,email,senha) value('$nm','$snm','$eml','$snh')");

?>