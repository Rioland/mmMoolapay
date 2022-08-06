<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moola Pay</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="css/waitlist.css">
</head>
<body>
    <div class="waitlist-contain">
        <div class="waitlist">
            <div class="navbar">
                <div class="logo">
                    <a href="/">
                        <img class="img-logo1" src="images/logo_logo icon blue copy.png" alt="">
                        <img class="img-logo2" src="images/logo_text blue only copy.png" alt="">
                    </a>
                </div>
                <div class="waitlist-btn">
                    <a href="#">Join Waitlist</a>
                </div>
            </div>
            <div class="waitlist-background">
                <div class="wait-text">
                   <div class="head">
                    <h1>
                        Get<br> Notified<br> when we<br> Launch
                    </h1>
                   </div>
                   
                    <div class="wait-img">
                        <img src="images/New message-bro 1.png" alt="">
                    </div>
                    <div class="form-waitlist">
                        <div class="text-box text-box1">
                        <input type="text" name="fname" id="fname" placeholder="Full Name">
                        </div>
                        <div class="text-box text-box2">
                        <input type="email" name="email" id="email" placeholder="Email Address">
                        </div>
                        <a href="notify" class="form-btn"><p>Get Notified</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
  require("./footer.php")
    ?>
</body>
</html>