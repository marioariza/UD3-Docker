<html>
    <head>
        <title>Alumnos Futboleros</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>Esto es un resumen de nuestros alumnos futboleros:</h1>";

                $conn = mysqli_connect('db', 'grupo2', 'test', "dbname");
                $query = 'SELECT * FROM user_futbol';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
                
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>