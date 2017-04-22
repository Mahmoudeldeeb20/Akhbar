<?php
    session_start();
 echo $_SESSION[$userid]
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

        <div class="line"></div>

        <form action="up.php" method="post">
            <div class="form-div">

                <div class="input-group input-group-lg ">
                    <input type="text" name="fname" class="form-control" placeholder="UserName" aria-describedby="sizing-addon1" style="border-radius:6px;">
                </div>
                <div class="input-group input-group-lg">
                    <input type="password" name="pwd" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" style="border-radius:6px;">
                </div>
                <div class="input-group input-group-lg">
                    <input type="email" name="mail" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" style="border-radius:6px;">
                </div>
                <div class="input-group input-group-lg">
                    <button type="submit" class="btn btn-default">SaveData</button>
                </div>
            </div>
        </form>

        <div class="line"></div>
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
