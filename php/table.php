<?php
include 'dph.php';
session_start();

if($_SESSION['userid']){




?>

    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/nav-stl.css">
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">


    </head>

    <body>
        <nav class="navbar transparent navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Akbar El-Youm</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">SignUp</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <img class="navbar-img" src="../img/navbar 2.jpg">




        <table class="table">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>الأسم</th>
                    <th>محاضرات</th>
                    <th>حضور</th>
                    <th>ميدترم</th>
                    <th>عملى</th>
                    <th>فاينال</th>
                </tr>
            </thead>

            <?php if ($_SESSION['activation'] == 1) {
    $sql = "SELECT * FROM marks WHERE user_id='".$_SESSION['userid']."' LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
//
//    print_r($row);


    echo  "<tbody>";
    echo "<tr class='club-hover'>";
    echo  "<th scope='row'> " . $row['user_id']  . "</th>";
    echo "<td>" . $row['first_name'] ."</td>";
    echo "<td>" .  $row['lec']."</td>";
    echo "<td>" . $row['att']."</td>";
    echo "<td>" . $row['midterm']."</td>";
    echo "<td>" . $row['pexam']."</td>";
    echo "<td>" . $row['fexam']."</td>";

    echo "</tr>";

    echo "</tbody>";



} else if ($_SESSION['activation'] == 2) {
    $sql = "SELECT * FROM marks";
    $result = $conn->query($sql);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
//    print_r($row);
//    print_r($data);
//    if(isset($data)){
        foreach($data as $student) {




            echo  "<tbody>";
            echo "<tr class='club-hover'>";
            echo  "<th scope='row'> " . $student['user_id']  . "</th>";
            echo "<td>" . $student['first_name'] ."</td>";
            echo "<td>" .  $student['lec']."</td>";
            echo "<td>" . $student['att']."</td>";
            echo "<td>" . $student['midterm']."</td>";
            echo "<td>" . $student['pexam']."</td>";
            echo "<td>" . $student['fexam']."</td>";
            echo '<td>
                    <a class="btn btn-success">Edit</a>
                </td>';
            echo "</tr>";

            echo "</tbody>";




        }
//    }
}?>
        </table>


        <footer class="footer-distributed hvr-shutter-out-horizontal">

            <div class="footer-right">

                <a class="a" href="https://www.facebook.com/"><i class=" fa fa-facebook"></i></a>
                <a class="b" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a class="c" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                <a class="d" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>

            </div>

            <div class="footer-left">

                <p class="footer-links">
                    <a href="#">Home</a> -
                    <a href="#">Home</a> -
                    <a href="#">Home</a> -
                    <a href="#">Home</a> -
                    <a href="#">Home</a> -
                    <a href="#">Home</a>
                </p>

                <p>Akhbar El-Youm &copy; 2017</p>
            </div>

        </footer>






        <script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </body>

    </html>



    <?php } else {
    echo "You are Not Logged In";


} ?>
