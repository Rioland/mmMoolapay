<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moola Pay</title>
        
    <link rel="shortcut icon" href="images/logo_logo icon blue copy.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/waitlist.css">
    <link rel="stylesheet" href="css/notify.css">
    <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
   
</head>

<body>
    <div class="notify-container">
        <div class="notify-background">
            <div class="navbar">
                <div class="logo">
                    <a href="/">
                        <img class="img-logo1" src="images/logo_logo icon white 1.png" alt="">
                        <img class="img-logo2" src="images/logo_white text only 1.png" alt="">
                    </a>
                </div>
                <div class="waitlist-btn">
                    <a href="#">Join Waitlist</a>
                </div>
            </div>
            <div class="notify-text">
                <div class="not-text1">
                    <h1>Awesome!</h1>
                    <br><br><br><br><br><br><br>
                    <h1 class="not-2">We are glad to have<br>you on board with us</h1><br>
                    <a href="#" class="blue-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Share with Friends</a>

                </div>
                <div class="not-img">
                    <img src="images/It's Friday-bro 1.png" alt="">
                </div>
            </div>
            <div class="notify2">
                <img class="not-img2" src="images/It's Friday-bro 1.png" alt="">
                <div class="not-text1">
                    <h1>Awesome!</h1>
                    <br><br><br><br><br><br>
                    <h1 class="not-2">We are glad to <br>have you on<br>board with us</h1><br>
                    <a href="#" class="blue-btn second-btn">Share with Friends</a>
                </div>
            </div>
            <!-- <div class="overlay">
                <div class="share-form">
                    <p> Click any of the links below to share a<br>word about us.</p>
                    <ul>
                        <li><a href="#"><img class="li-img" src="images/WhatsApp.png" alt="">
                                <p>Share on WhatsApp</p>
                            </a></li>
                        <li><a href="#"><img class="li-img" src="images/Twitter Circled.png" alt="">
                                <p>Share on Twitter</p>
                            </a></li>
                        <li><a href="#"><img class="li-img" src="images/Instagram.png" alt="">
                                <p>Share on Instagram</p>
                            </a></li>
                        <li><a href="#"><img class="li-img" src="images/Facebook Circled.png" alt="">
                                <p>Share on Facebook</p>
                            </a></li>
                    </ul>
                </div>
            </div> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="overlay1">
                <div class="share-form">
                    <p> Click any of the links below to share a<br>word about us.</p>
                    <ul>
                        <li data-sharer="whatsapp" data-title="Checkout Sharer.js!" data-url="https://ellisonleao.github.io/sharer.js/"><a href="#">
                            <img class="li-img" src="images/WhatsApp.png" alt="">
                                <p>Share on WhatsApp</p>
                            </a></li>
                        <li  data-sharer="twitter" data-title="Checkout Sharer.js!" data-hashtags="awesome, sharer.js" data-url="https://ellisonleao.github.io/sharer.js/">
                            <a href="#"><img class="li-img" src="images/Twitter Circled.png" alt="">
                                <p>Share on Twitter</p>
                            </a></li>
                        <li ><a href="#"><img class="li-img" src="images/Instagram.png" alt="">
                                <p>Share on Instagram</p>
                            </a></li>
                        <li data-sharer="facebook" data-hashtag="hashtag" data-url="https://ellisonleao.github.io/sharer.js/"><a href="#"><img class="li-img" src="images/Facebook Circled.png" alt="">
                                <p>Share on Facebook</p>
                            </a></li>
                    </ul>
                </div>
            </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sharer.js/0.2.1/sharer.min.js" integrity="sha512-NQoBHsPg5XQHRisNapieTFGIHeiYLai1SpqvnG0le8wN677uHqe+k/VDdlgu/7wIsVTmqcX8MuODJK7TtuDnjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php
    require("./footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="notify.js"></script> -->
   
</body>

</html>