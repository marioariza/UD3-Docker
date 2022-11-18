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

                $conn = mysqli_connect("db", "grupo2", "test", "dbname");
                $query = 'SELECT * FROM user_futbol';
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