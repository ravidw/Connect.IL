<?php
    $dbhost = "182.50.131.14";
    $dbuser = "mtastudDB1";
    $dbpass = "mtastudDB1!";
    $dbname = "mtastudDB1";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }

    $query = "SELECT o.*, u.* FROM tbl16_offers_225 o INNER JOIN tbl16_users_225 u ON o.ID = u.ID";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("DB query failed.");
    }
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
                    <a id="home" class="logo" href="../index.php"></a>
                </div>

                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul>
                        <li class="nav-link">
                            <a href="index.html#suggested">Suggested Connections</a>
                        </li>
                        <li class="nav-link">
                            <a href="index.html#connect-us">Connect With Us</a>
                        </li>
                        <li>
                            <a href="#" class="btn-sign-in">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="search-bar">
            <form id="search-form" method="get" action="results.html">
                <div class="search-box">
                    <i class="glyphicon glyphicon-search"></i>
                    <input name="search-input" type="text" placeholder="Search">
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
    <main id="results">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Search results</li>
        </ol>
        <section>
            <h2><b>Search Results </b>(found <span id="num-of-results">3</span> results)</h2>
        </section>
        <div class="result">
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="media bottom-border">';
                    echo '<div class="media-left">';
                    echo '<img class="media-object" src="../includes/images/Pierre.jpg" alt="Pierre">';
                    echo '</div>';
                    echo '<div class="media-body">';
                    echo '<h4 class="media-heading">'.$row[first_name].'</h4>';
                    echo '<select class="readonly-rate-bar">';
                    echo '<option value="1">1</option>';
                    echo '<option value="2">2</option>';
                    echo '<option value="3">3</option>';
                    echo '<option value="4">4</option>';
                    echo '<option value="5" selected>5</option>';
                    echo '</select>';
                    echo '<p>';
                    echo '<b>When: </b><span class="when-desc">'.$row[from].' - '.$row[to].'</span><br>';
                    echo '<b>Where: </b><span class="where-desc">'.$row[location].'</span><br>';
                    echo '<b>Willing to offer: </b><span class="offer-desc">'.$row[title].'</span><br>';
                    echo '<b>Willing to receive: </b><span class="receive-desc">'.$row[looking_for].'</span><br>';
                    echo '</p>';
                    echo '</div>';
                    echo '<div class="media-right">';
                    echo '<a class="default-btn" href="details.html">View connection</a>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
            <?php
                mysqli_free_result($result);
            ?>
    </main>
    <footer>
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