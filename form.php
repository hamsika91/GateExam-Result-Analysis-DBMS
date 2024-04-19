<!-------table-->
<table align="centre" style="margin: 0px auto;">

    <tr>

        <td>YEAR</td>
        <td>STATE/UT</td>
        <td>SUBJECT</td>
        <td>REGISTERED CANDIDATES</td>
        <td>QUALIFIED CANDIDATES</td>
        <td>HIGHEST PERCENTILE</td>

    </tr>
    <tr>

        <?php
        // create connection
        $name = $_POST['state_name'];
        echo "Hello, $name!";
        
        $mysqli = new mysqli("localhost:3306", "root", "", "gate");

        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }

        // read all row from database
        $sql = "select * from main where State_UT ='$name'";
        $result = $mysqli->query($sql);
        $mysqli->close();

        while ($rows = $result->fetch_assoc()) {
            echo "<tr>
    <td>" . $rows["Year"] . "</td>
    <td>" . $rows["State_UT"] . "</td>
    <td>" . $rows["Subject_code"] . "</td>
    <td>" . $rows["Registered_Candidates"] . "</td>
    <td>" . $rows["Qualified_Candidates"] . "</td>
    <td>" . $rows["Highest_Percentile"] . "</td>

    </tr>";
        }


        ?>
    </tr>

</table>