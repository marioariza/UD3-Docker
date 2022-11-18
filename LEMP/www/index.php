<html>
    <head>
        <title>Alumnos Futboleros</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1>Esto es un resumen de nuestros alumnos futboleros:</h1>
            <?php

<<<<<<< HEAD:LEMP/www/index.php
                $conn = mysqli_connect('db', 'manu', 'test', "dbname");
                $query = 'SELECT * From Data';
=======
                $conn = mysqli_connect("db", "grupo2", "test", "dbname");
                

                $query = 'SELECT * FROM user_futbol';
>>>>>>> 77e7fd907c926317e31ea8ea8417b22158470cf2:www/index.php
                $result = mysqli_query($conn, $query);
                ?>

                <td><?php $row['id'] ?></td>
                <td><?php $row['name'] ?></td>
                <td><?php $row['surname'] ?></td>
                <td><?php $row['edad'] ?></td>
                <td><?php $row['equipo'] ?></td>

            <?php 
            $result->close();
            mysqli_close($conn); 
            ?>
        </div>
    </body>
</html>