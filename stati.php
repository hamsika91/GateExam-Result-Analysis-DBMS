<!DOCTYPE html>
<html>

<head>
    <title>stati</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href=" stati.css">
    <link rel="stylesheet" href="stati.css?v=<?php echo time(); ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



</head>

<body>

    <div id="headline"></div>
    <div id="box1">
        <div class="card1">
            <img src="https://gate.iitkgp.ac.in/images/banner.jpg">
        </div>
    </div>


    <div id="box2">
        <!--nav---->
        <nav>
            <ul>
                <li>
                    <a href="home_new.html">HOME</a>
                    <a href="stati.php">STATISTICS</a>
                    <a href="pc1.html">RESULT SUMMARY</a>
                </li>
            </ul>
        </nav>
    </div>



    <!-----form-1---------->

    <div id="box3">
        <form action="" method="post">
            <div id="box4">
                <p>STATE/UT WISE GATE ANYLASIS</p>
            </div>
            <div class="group_row">
                <!-- <div class="btn1">
                    <input type="submit" value="show"
                    
                    <!-- <button style="height:40px ; width:100px;" onclick=show()>subject code</button>
                </div>  -->

                <br>
            </div>
            <!----label1-->
            <div class="single_row" style="padding-top:30px;
    padding-left:100px;
    display: flex;
    letter-spacing: 0.2em;">
                <div class=l1>

                    <label for="state"> State/ut
                        <select name="state_name">
                            <option value="#"></option>
                            <option value="Tamil Nadu">TN</option>
                            <option value="Kerala">KL</option>
                            <option value="Andhra Pradesh">AP</option>
                            <option value="TS">TS</option>
                            <option value="DD">DD</option>
                        </select>
                    </label>
                </div>
                <!-- label2 -->
                <div class="l2">
                    <label for="YEAR"> year
                        <select name="year">
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
                <div class="l3">
                    <label for="subject id"> subject id
                        <select name="sub_id">
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
                <div class="show">
                    <style>
                        .show {
                            display: inline-block;
                            padding: 15px 25px;
                            font-size: 24px;
                            cursor: pointer;
                            text-align: center;
                            text-decoration: none;
                            outline: none;
                            color: darkcyan;
                            background-color: darkblue;
                            border: none;
                            border-radius: 15px;
                            box-shadow: 0 9px #999;
                        }

                        .show:hover {
                            background-color: #3e8e41
                        }

                        .show:active {
                            background-color: #3e8e41;
                            box-shadow: 0 5px #666;
                            transform: translateY(4px);
                        }
                    </style>
                    <input type="submit" value="show">

                </div>
            </div>
        </form>
        <br>
        <br>
        <!-- -----table -->
        <table align="centre" style="margin: 0px auto;">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

            <style>
                table {
                    border-collapse: collapse;
                    padding-top: 40px;
                    padding-left: 20px;
                    width: 70%;
                    border-width: 0.04cm;
                    border-color: grey;


                }

                th,
                td {
                    text-align: center;
                    padding: 12px;
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    border-color: grey;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2
                }
            </style>

            <tr>

                <td style="background-color:rgb(139, 216, 228)">
                    YEAR</td>
                <td style="background-color:rgb(139, 216, 228)">STATE/UT</td>
                <td style="background-color:rgb(139, 216, 228)">SUBJECT</td>
                <td style="background-color:rgb(139, 216, 228)">REGISTERED CANDIDATES</td>
                <td style="background-color:rgb(139, 216, 228)">QUALIFIED CANDIDATES</td>
                <td style="background-color:rgb(139, 216, 228)">HIGHEST PERCENTILE</td>

            </tr>
            <tr>
                <?php
                if (isset($_POST['state_name'])) {
                    $name = $_POST['state_name'];
                }
                
                if (isset($_POST['year'])) {
                    $year = $_POST['year'];
                }
                
                if (isset($_POST['sub_id'])) {
                    $id = $_POST['sub_id'];
                }

                // $name = $_POST['state_name'];

                // $year =$_POST['year'];

                // $id = $_POST['sub_id'];

                // create connection
                $mysqli = new mysqli("localhost:3306", "root", "", "gate");

                if ($mysqli->connect_error) {
                    die('Connect Error (' .
                        $mysqli->connect_errno . ') ' .
                        $mysqli->connect_error);
                }

                // read all row from database
                // $sql = "select * from main where State_UT ='$name' and Year=$year and Subject_Code='$id'";
                if ($name == '#' and $year == '#' and $id == '#') {
                    $sql = "select * from main";
                } elseif ($year == '#' and $id == '#') {
                    $sql = "select * from main where State_UT='$name'";
                } elseif ($name == '#' and $id == '#') {
                    $sql = "select * from main where Year=$year";
                } elseif ($name == '#' and $year == '#') {
                    $sql = "select * from main where Subject_Code='$id'";
                } else {
                    $sql = "select * from main where State_UT ='$name' && Year=$year && Subject_Code='$id'";
                }

                $result_1 = $mysqli->query($sql);
                // $mysqli->close();
                while ($rows = $result_1->fetch_assoc()) {
                    echo "<tr>
                <td>" . $rows["Year"] . "</td>
                <td>" . $rows["State_UT"] . "</td>
                <td>" . $rows["Subject_code"] . "</td>
                <td>" . $rows["Registered_Candidates"] . "</td>
                <td>" . $rows["Qualified_Candidates"] . "</td>
                <td>" . $rows["Highest_Percentile"] . "</td>

                </tr>";
                }
                $mysqli->close();


                //
                ?>
            </tr>

        </table>
        <br>
        <br>
        <!----form 2-->
        
        <form action="cutoff.php" method="post">
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
                

                $year2 =($_POST['year2']);

                $id2= ($_POST['sub_id2']);

                // create connection
                $mysqli = new mysqli("localhost:3306", "root", "", "gate");

                if ($mysqli->connect_error) {
                    die('Connect Error (' .
                        $mysqli->connect_errno . ') ' .
                        $mysqli->connect_error);
                }

                // read all row from database
                // $sql = "select * from main where State_UT ='$name' and Year=$year and Subject_Code='$id'";
                if ( $year2 == '#' and $id2 == '#') {
                    $sql = "select * from cutoff";
                } 
                elseif ( $id2 == '#') {
                    $sql = "select * from cutoff where Year=$year2";
                } elseif ($year2 == '#') {
                    $sql = "select * from cutoff where Subject_Code='$id2'";
                } else {
                    $sql = "select * from cutoff where Year=$year2 && Subject_Code='$id2'";
                }


                // // read all row from database
                
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

        </form>
    </div>
</body>

</html>