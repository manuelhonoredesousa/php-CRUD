<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<style>
    a{
        color: red;
        text-decoration: none;

    }
    table{
        text-align: center;
    }
</style>

<body>
    <a href="javascript:history.go(-1)">Voltar</a> <br><br>
    <form action="" method="get">
        <fieldset>
            <legend>Modify Form</legend>
            Nome: <input type="text" name="nomee">
            Senha: <input type="text" name="senhaa">
            <br>
            <input type="submit" value="Save">
        </fieldset>
    </form>
    <br>
    <hr color='red'>

    <table border="1px" style="border: 1px dashed black;">
        <thead style="background-color: #222222; color: white;">
            <td width="60">ID</td>
            <td width="400">Nome</td>
            <td width="200">Senha</td>
            <td width="90">Editar</td>
            <td width="90">Excluir</td>
        </thead>
        <tbody>

            <?php
            include "conexao.php";
            $sql_selectt = "SELECT nome FROM logi";

            while($consulta = mysql_fetch_array($sql_selectt)){
            #print_r($consulta);
            $getName = $consulta['nome'];
            ?>
                    <tr>
                        <td></td>
                        <td> <?echo "$getName";?></td>
                        <td></td>
                        <td><a href=''>Editar</a></td>
                        <td><a href=''>Excluir</a></td>
                    </tr> ";
            <?} ?>
        </tbody>
    </table>

</body>

</html>