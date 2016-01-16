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
    <link href="includes/css/jgallery.min.css" rel="stylesheet">
    <script type="text/javascript" src="includes/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="includes/js/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="includes/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="includes/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="includes/js/app.js"></script>
    <script type="text/javascript" src="includes/js/jgallery/jgallery.min.js"></script>
    <script type="text/javascript" src="includes/js/jgallery/touchswipe.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="includes/js/details.js"></script>
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
                    <a id="home" class="logo" href="#"></a>
                </div>

                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul>
                        <li class="nav-link">
                            <a href="index.php#suggested">Suggested Connections</a>
                        </li>
                        <li class="nav-link">
                            <a href="index.php#connect-us">Connect With Us</a>
                        </li>
                        <li>
                            <a href="#" class="btn-sign-in">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main id="details">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" onclick="window.history.back()">Search results</a></li>
            <li class="active">Pierre Curie</li>
        </ol>
        <h2>
            Connect Pierre Curie
            <select class="readonly-rate-bar">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
            </select>
        </h2>
        <section class="left-details">
            <div id="gallery">
                <a href="includes/images/hotel-big.jpg"><img src="includes/images/hotel-big.jpg" alt="The magnificent view from the hotel"></a>
                <a href="includes/images/hotel2-big.jpg"><img src="includes/images/hotel2-big.jpg" alt="One of many luxurious rooms"></a>
                <a href="includes/images/hotel3-big.jpg"><img src="includes/images/hotel3-big.jpg" alt="Warm welcoming"></a>
            </div>
            <div id="googleMap"></div>
        </section>
        <section class="right-details">
            <div class="info">
                <p>
                    <b>When: </b><span class="when-desc">All year.</span><br>
                    <b>Where: </b><span class="where-desc">Paris, France, 20 Avenue Leon Bourgeois.</span><br>
                    <b>Willing to offer: </b><span class="offer-desc">2 nights at my beautiful hotel in the center of the city, for free.</span><br>
                    <b>Willing to receive: </b><span class="receive-desc">Open for suggestions.</span><br>
                </p>
                <p>
                    <b>About me: </b>My name is Pier, I am a hotel owner. I love Israelis and want them to visit my hotel.
                    In my free time i'm playing the piano and taking pictures of the beautiful birds of France.
                </p>
                <p>
                    <b>More info: </b>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
                    mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                </p>
                <a class="default-btn get-connected" href="#">Get Connected</a>
            </div>
            <div class="reviews">
                <h3>Top comments</h3>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="includes/images/billie-jean.jpeg" alt="Billie Jean">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Billie Jean</h4>
                        <select class="readonly-rate-bar">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected>5</option>
                        </select>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                        </p>
                    </div>
                </div>
                <a class="default-btn more-comments" href="#">More comments</a>
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