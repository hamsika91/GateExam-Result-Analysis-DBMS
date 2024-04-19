

<form action="" method="post">
    <style>
        .second_row {
            display: flex;
        }
    </style>
    <div class="second_row">
        <div class=hi1 style="padding-top:50px;padding-left:100px;letter-spacing: 0.2em; ">



            <label for="YEAR"> year
                <select name="year2">
                    <option value="#"></option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                </select>
            </label>


        </div>
        <!-- ---label 3 -->
        <div class="hi2" style="padding-top:50px;padding-left:70px;padding-right:300px;float:right;letter-spacing: 0.2em;">
            <label for="subject id"> subject id
                <select name="sub_id2">
                    <option value="#"></option>
                    <option value="CS">CS</option>
                    <option value="ME">AE</option>
                    <option value="EEE">EC</option>
                    <option value="CVE">EE</option>
                    <option value="ECE">MEE</option>
                    <option value="BT">BT</option>
                    <option value="ST">ST</option>
                </select>
            </label>
        </div>
        <div class="show" style="padding-right:50px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <style>
                .show {
                    display: inline-block;
                    padding: 10px 20px;
                    font-size: 24px;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                    cursor: pointer;
                    text-align: center;
                    text-decoration: none;
                    outline: none;
                    color: darkcyan;
                    background-color: darkcyan;
                    border: none;
                    border-radius: 15px;
                    box-shadow: 0 9px grey;
                    margin-right: 10px;
                }

                .show:hover {
                    background-color: aliceblue
                }

                .show:active {
                    background-color: #3e8e41;
                    box-shadow: 0 5px #666;
                    transform: translateY(4px);
                }
            </style>
            <input type="submit" value="display">
        </div>
    </div>
</form>
<br>
<br>
<!-- table 2------------------ -->

<table align="centre" style="margin: 0px auto;">
    <tr>

        <td style="background-color:aliceblue">YEAR</td>
        <td style="background-color:rgb(139, 216, 228)">SUBJECT</td>
        <td style="background-color:rgb(139, 216, 228)">Cutoff(general)</td>
        <td style="background-color:rgb(139, 216, 228)">Cutoff(OBC))</td>
        <td style="background-color:rgb(139, 216, 228)">Cutoff(SC/ST)</td>


    </tr>
    <tr>
        <?php

        // create connection
        $mysqli = new mysqli("localhost:3306", "root", "", "gate");

        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }


        $year2 = $_POST['year2'];

        $id2 = $_POST['sub_id2'];

        // create connection
        $mysqli = new mysqli("localhost:3306", "root", "", "gate");

        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }

        // read all row from database
        // $sql = "select * from main where State_UT ='$name' and Year=$year and Subject_Code='$id'";
        if ($year2 == '#' and $id2 == '#') {
            $sql = "select * from cutoff";
        } elseif ($id2 == '#') {
            $sql = "select * from cutoff where Year=$year2";
        } elseif ($year2 == '#') {
            $sql = "select * from cutoff where Subject_Code='$id2'";
        } else {
            $sql = "select * from cutoff where Year=$year2 && Subject_Code='$id2'";
        }


        // read all row from database

        $result_2 = $mysqli->query($sql);
        $mysqli->close();

        while ($rows = $result_2->fetch_assoc()) {
            echo "<tr>
                         <td>" . $rows["Year"] . "</td>
                        <td>" . $rows["Subject_code"] . "</td>
                       <td>" . $rows["general"] . "</td>
                       <td>" . $rows["obc"] . "</td>
                        <td>" . $rows["sc"] . "</td>
                        </tr>";
        }

        ?>


    </tr>
</table>