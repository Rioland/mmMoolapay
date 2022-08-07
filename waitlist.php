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
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="css/waitlist.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./css/footer.css">
<script src="./jquery-3.5.1.js"></script>
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
                        <a id="submit" class="form-btn" style="cursor: pointer;"><p>Get Notified</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
  require("./footer.php")
    ?>
     <script>
      $(document).ready(function () {
        $("#submit").click(function (e) {
            e.preventDefault();
        const name= $("#fname").val()
        const email=$("#email").val()
        if(name && email){
         $.ajax({
             type: "POST",
             url: "handler",
             data: {
                 fullname:name,
                 email:email
             },
             dataType: "text",
             success: function (response) {
                 if(response==true){
                     window.location.href="./notify";
                 }else{
                    alert(response)
                 }
             }
         });
        }else{
        alert("All fields are required")
        }
        });
      });
    </script>
</body>
</html>