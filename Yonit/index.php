<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connect.IL</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="includes/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="includes/css/styles.css" rel="stylesheet">
    <link href="includes/css/bootstrap-stars.css" rel="stylesheet">
    <link href="includes/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="includes/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="includes/js/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="includes/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="includes/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="includes/js/app.js"></script>
</head>
<body>
    <header id="main-image">
        <nav class="navbar navbar-default top-nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="home" class="logo" href="#"></a>
                </div>

                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul>
                        <li class="nav-link">
                            <a href="#suggested">Suggested Connections</a>
                        </li>
                        <li class="nav-link">
                            <a href="#how-it-works">What is Connect.IL</a>
                        </li>
                        <li class="nav-link">
                            <a href="#connect-us">Connect With Us</a>
                        </li>
                        <li class="li-login">
                            <a href="#" class="btn-sign-in">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="tag-line">Connecting Israel to the World, and the World to Israel</div>
        <div class="search-bar">
            <form id="search-form" method="get" action="php/results.php">
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
    <main id="main-home">
        <section id="suggested" class="bottom-border">
            <h1>Suggested Connections</h1>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="includes/images/image-ph.jpg" alt="Could be your best friend!">
                    </a>
                    Label 1
                    <select class="readonly-rate-bar">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="includes/images/image-ph.jpg" alt="Could be your best friend!">
                    </a>
                    Label 2
                    <select class="readonly-rate-bar">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="includes/images/image-ph.jpg" alt="Could be your best friend!">
                    </a>
                    Label 3
                    <select class="readonly-rate-bar">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="includes/images/image-ph.jpg" alt="Could be your best friend!">
                    </a>
                    Label 4
                    <select class="readonly-rate-bar">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </section>
        <section id="how-it-works" class="bottom-border">
            <h1>What is Connect.IL</h1>
            <div class="div-how-works">
                <img class="globe-israel" src="includes/images/flag-nation-country-israel.png" alt="Israel">
                <img class="arrow-right" src="includes/images/arrow_curved-right.png" alt="Arrow right">
                <div class="explanation">
                    <p>
                        <b>Israelis sharing the love with the world!<br><br>
                        We invite you to connect by your special offer with Israelis who want to travel,
                        and get unique things in return!</b>
                    </p>
                </div>
                <img class="globe-world" src="includes/images/Earth-128.png" alt="World">
                <img class="arrow-left" src="includes/images/arrow_curved-left.png" alt="Arrow left">
            </div>
        </section>
        <section id="connect-us">
            <h1>Connect With Us</h1>
            <ul class="connect-options">
              <li>
                <a href="#"><img src="includes/images/facbook.png" alt="Facbook"></a>
              </li>
              <li>
                <a href="#"><img src="includes/images/twitter.png" alt="Twitter"></a>
              </li>
              <li>
                <a href="#"><img src="includes/images/instagram.png" alt="Instagram"></a>
              </li>
              <li>
                <a href="#"><img src="includes/images/youtube.png" alt="You Tube"></a>
              </li>
              <li>
                <a href="#"><img src="includes/images/email.png" alt="Email"></a>
              </li>
            </ul>
        </section>
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
                    <a href="#">Contact Us</a>
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