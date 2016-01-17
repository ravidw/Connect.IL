<?php
    $dbhost = "182.50.131.14";
    $dbuser = "mtastudDB1";
    $dbpass = "mtastudDB1!";
    $dbname = "mtastudDB1";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }

    $ID =  htmlspecialchars($_GET["ID"]);
    $NUM = htmlspecialchars($_GET["offer_num"]);

    $query = "SELECT o.*, u.*".
             " FROM tbl16_offers_225 o".
             " INNER JOIN tbl16_users_225 u".
             " ON o.ID = u.ID".
             " WHERE o.ID = ".$ID.
             " AND o.offer_num = ".$NUM;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    if(!$result){
        die("DB query failed.");
    }

    $query2 = "SELECT i.*, u.*".
              " FROM tbl16_images_225 i".
              " INNER JOIN tbl16_users_225 u".
              " ON i.ID = u.ID".
              " WHERE u.ID = ".$ID;

    $result2 = mysqli_query($connection, $query2);
?>

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
                    <a id="home" class="logo" href="index.php"></a>
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
                            <a href="#" class="btn-sign-in" data-toggle="modal" data-target="#loginModal">Login</a>
                            <?php include 'loginModal.html' ?>
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
            <li class="active"><?php echo $row[first_name].' '.$row[last_name] ?></li>
        </ol>
        <h2>
            Connect <?php echo $row[first_name].' '.$row[last_name] ?>

            <select class="readonly-rate-bar">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
            </select>
        </h2>
         <section>
              <div class="host-image">
                <img class="media-object" src="<?php echo $row[avatar] ?>" alt="Pierre Curie">
              </div>
              <div class="host-text">
                <p>
                  <b>What in this offer? </b><?php echo $row[title] ?><br>
                  <b>When? </b><?php echo $row[from]. ' - '.$row[to] ?><br>
                  <b>Where? </b><?php echo $row[location] ?><br>
                  <b>What do I want to receive in return? </b><?php echo $row[looking_for] ?><br>
                </p>
                <p>
                  <b>Few more thing's i'd like you to know about my offer:</b>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
                  mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                </p>
                <p>
                  <b>A little bit about myself:</b><br>
                  <?php echo $row[description] ?>
                </p>
              </div>
              <div class="clear"></div>
              <div class="connect-button">
                <a class="default-btn get-connected" href="#">Connect With Me!</a>
              </div>
            </section>
            <section>
              <div class="left-details">
                <div id="gallery">
                    <?php
                        if(mysqli_fetch_assoc($result2)->lengths == 0){
                            echo '<a href="includes/images/image-ph"><img src="includes/images/image-ph" alt="No images :("></a>';
                        }
                        while($image = mysqli_fetch_assoc($result2)){
                            echo '<a href="'.$image[source].'"><img src="'.$image[source].'" alt="'.$image[alt].'"></a>';
                        }
                    ?>
                </div>
              </div>
              <div class="right-details">
                <div id="googleMap"></div>
              </div>
            </section>
            <section>
              <div class="left-details">
                <div id="gallery">
                  <div class="reviews">
                    <h4>Top Comments about <?php echo $row[first_name].' '.$row[last_name] ?>:</h4>
                    <div class="media media2">
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
                    <div class="media media2">
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
                </div>
              </div>
              <div class="right-details">
                <div class="reviews">
                  <h4>More offers from <?php echo $row[first_name].' '.$row[last_name] ?>:</h4>
                  <div class="media media3 media3-first">
                    <div class="media-left">
                      <a href="#"><img src="includes/images/hotel2-small.jpg" alt="Offer Title"></a>
                    </div>
                    <div class="media-body">
                      <p>
                        <b>What?</b> 2 nights at my beautiful hotel in the center of the city, for free.<br>
                        <b>When?</b> All year.<br>
                        <b>Where?</b> Paris, France, 20 Avenue Leon Bourgeois.<br>
                        <a class="see-this-offer">See this offer</a>
                      </p>
                    </div>
                  </div>
                  <div class="media media3">
                    <div class="media-left">
                      <a href="#"><img src="includes/images/hotel2-small.jpg" alt="Offer Title"></a>
                    </div>
                    <div class="media-body">
                      <p>
                        <b>What?</b> 2 nights at my beautiful hotel in the center of the city, for free.<br>
                        <b>When?</b> All year.<br>
                        <b>Where?</b> Paris, France, 20 Avenue Leon Bourgeois.<br>
                        <a class="see-this-offer">See this offer</a>
                      </p>
                    </div>
                  </div>
                  <div class="media media3">
                    <div class="media-left">
                      <a href="#"><img src="includes/images/hotel2-small.jpg" alt="Offer Title"></a>
                    </div>
                    <div class="media-body">
                      <p>
                        <b>What?</b> 2 nights at my beautiful hotel in the center of the city, for free.<br>
                        <b>When?</b> All year.<br>
                        <b>Where?</b> Paris, France, 20 Avenue Leon Bourgeois.<br>
                        <a class="see-this-offer">See this offer</a>
                      </p>
                    </div>
                  </div>
                  <a class="default-btn more-comments" href="#">View all my offers</a>
                </div>
              </div>
            </section>
        <?php mysqli_free_result($result); ?>
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