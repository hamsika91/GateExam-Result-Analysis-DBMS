<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>sample table</title>
</head>

<body>

    <h1>table</h1>
    <br>
    <table class="table">
        <th>
        <td>YEAR</td>
        <td>STATE/UT</td>
        <td>SUBJECT</td>
        <td>REGISTERED CANDIDATES</td>
        <td>QUALIFIED CANDIDATES</td>
        <td>HIGHEST PERCENTILE</td>

        </th>
        <tr>
            <?php
            include("developers.php");
            ?>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "gate";

            // create connection
            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error) {
                die("failed" . $connection->connect_error);
            }

            // read all row from database
            $sql = "select * from main";
            $result = $connection->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["YEAR"] . "</td>
                        <td>" . $row["STATE"] . "</td>
                        <td>" . $row["SUBJECT"] . "</td>
                        <td>" . $row["REGISTERED CANDIDATES"] . "</td>
                        <td>" . $row["QUALIFIED CANDIDATES"] . "</td>
                        <td>" . $row["HIGHEST PERECNTILE"] . "</td>
    
                    </tr>";
            }

            ?>

        </tr>


    </table>

</body>

</html>