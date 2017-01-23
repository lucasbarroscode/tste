<!doctype html>
<html>
     <head>
        <meta charset='utf-8'>
        <title>Formulario</title> 
    </head>
    <body>
        <form action="crud.php" method="post">
            <input type="radio" name="tipoCRUD" value="C">Create<br>
            <input type="radio" name="tipoCRUD" value="R">Read<br>
            <input type="radio" name="tipoCRUD" value="U">Update<br>
            <input type="radio" name="tipoCRUD" value="D">Delete<br>
            <input type="submit" value="Start">
        </form> 
    </body>
</html>   