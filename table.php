<?php

include "include/conn.inc.php";

?>

<!DOCTYPE html>
<html lang="sv-SE">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="inlämningsuppgift 2">
        <meta name="description" content="inlämningsuppgift 2">
        <meta name="author" content="Dalle">
        <title>Inlämningsuppgift 2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">
    </head>
<body>
<div class="message_box">
<p><?php if(isset($_GET['msg'])) echo $_GET['msg'];  ?></p>
</div> 

    <div class="table_container">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Förnamn</th>
                        <th>Efternamn</th>
                        <th>Adress</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
<?php

    $sql_query = "SELECT * FROM persons";

    $sql_results = $conn->query($sql_query);

    if($sql_results->num_rows > 0) {

        while($row = $sql_results->fetch_assoc()) {

            $address = $row["Street"]. " , " . $row["ZipCode"]. " " .$row["City"];

            echo "<tr>";
                echo "<td>".$row["FirstName"]."</td>";
                echo "<td>".$row["LastName"]."</td>";
                echo "<td>".$address."</td>";
                //echo "<td><a href='remove.php?ID=".$row["ID"]."'><i class='fas fa-trash-alt'></i></a></td>";
                echo "<td><a data-tool-tip='ta bort mig ur databasen!' href='remove.php?ID=".$row["ID"]."'><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }
    else {
        echo "<tr><td colespan='4'>Inga poster hittades...</td></tr>";
    
    }

?>
                </tbody>
        </table>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>