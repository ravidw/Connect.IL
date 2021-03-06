<?php
    $dbhost = "182.50.131.14";
    $dbuser = "mtastudDB1";
    $dbpass = "mtastudDB1!";
    $dbname = "mtastudDB1";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }

    $query = "SELECT * FROM tbl16_users_225 WHERE email = 'pierre@pierre.com'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("DB query failed.");
    }

    $user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connect.IL</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../includes/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../includes/css/datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="../includes/css/styles.css" rel="stylesheet">
    <link href="../includes/css/bootstrap-stars.css" rel="stylesheet">
    <link href="../includes/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="../includes/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../includes/js/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="../includes/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="../includes/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="../includes/js/app.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-default top-nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img id="user-avatar-mobile" src="../<?php echo $user[avatar] ?>">
                    <a id="home" class="logo" href="../index.html"></a>
                </div>

                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul>
                        <li class="nav-link">
                            <a href="../index.html#suggested">Suggested Connections</a>
                        </li>
                        <li class="nav-link">
                            <a href="../index.html#connect-us">Connect With Us</a>
                        </li>
                        <li>
                            <img id="user-avatar" src="../<?php echo $user[avatar] ?>">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="search-bar">
            <form id="search-form" method="get" action="#">
                <div class="search-box">
                    <i class="glyphicon glyphicon-search"></i>
                    <input name="search-input" type="text" placeholder="Search more connections">
                </div>
                <div class="input-daterange" id="search-range">
                    <input id="from-date" class="range" name="from-date" type="text" placeholder="From date">
                    <input id="to-date" class="range" name="to-date" type="text" placeholder="To date">
                </div>
                <select name="main-category">
                    <option value="rooms">Rooms for lodging</option>
                </select>
                <select name="secondary-category">
                    <option value="europe">Europe</option>
                </select>
                <input class="btn-search" type="submit" value="Search">
            </form>
        </div>
    </header>
    <main id="user-home">
        <section>
            <h2><b>Home</b></h2>
        </section>
        <section id="pending-requests" class="to-left">
            <h3>Pending Connection Requests (1)</h3>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="../includes/images/orit.jpeg" alt="Orit">
                </div>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit,<br>
                        vulputate eu pharetra nec, mattis ac neque.
                    </p>
                </div>
                <div class="media-right">
                    <i class="fa fa-reply reply-connection"></i>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="../includes/images/orit.jpeg" alt="Orit">
                </div>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit,<br>
                        vulputate eu pharetra nec, mattis ac neque.
                    </p>
                </div>
                <div class="media-right">
                    <i class="fa fa-reply reply-connection"></i>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="../includes/images/orit.jpeg" alt="Orit">
                </div>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit,<br>
                        vulputate eu pharetra nec, mattis ac neque.
                    </p>
                </div>
                <div class="media-right">
                    <i class="fa fa-reply reply-connection"></i>
                </div>
            </div>
        </section>
        <section id="approved-requests" class="to-left">
            <h3>Approved Connection Requests</h3>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="../includes/images/billie-jean.jpeg" alt="Orit">
                </div>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit,<br>
                        vulputate eu pharetra nec, mattis ac neque.
                    </p>
                </div>
                <div class="media-right">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="../includes/images/billie-jean.jpeg" alt="Orit">
                </div>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit,<br>
                        vulputate eu pharetra nec, mattis ac neque.
                    </p>
                </div>
                <div class="media-right">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>
        </section>
        <section id="my-offers" class="to-left">
            <h3>My offers&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></h3>
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="../includes/images/hotel2-small.jpg" alt="billie">
                </div>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit,<br>
                        vulputate eu pharetra nec, mattis ac neque.
                    </p>
                </div>
                <div class="media-right">
                    <i class="fa fa-pencil-square-o"></i>
                </div>
            </div>
        </section>
    </main>
    <footer class="clear">
        <nav class="bottom-nav">
            <ul>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Term of use</a>
                </li>
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Support</a>
                </li>
                <li>
                    <a href="#">Site map</a>
                </li>
            </ul>
        </nav>
        <div class="copyright">All Rights Reserved &copy; Connect.IL, 2016</div>
    </footer>
</body>
</html>