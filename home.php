<!DOCTYPE html>
<html lang="pt">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
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
    <a href="modify.php">Modify Page</a> <br><br>
    <a href="home.php?p=page">New Page</a> <br><br>
    <!-- SIGN IN -->
    <form action="insert.php?ff=save" method="get">
        <?php
            $_GET = 'ff=as';
        ?>
        <fieldset>
            <legend>SIGN IN</legend>
            Nome: <input type="text" name="nomee">
            Senha: <input type="text" name="senhaa">
            <br>
            <input type="submit" value="Save">
        </fieldset>
    </form>

    <br>
<?
if (filter_input(INPUT_GET,'p') =="page"){
?>
<hr>
<form action="" method="get">
        <fieldset>
            <legend>Page NEW</legend>
            Nome: <input type="text" name="nomee">
            Senha: <input type="text" name="senhaa">
            <br>
            <input type="submit" value="Save">
        </fieldset>
    </form>
<?
}
?>

</body>

</html>