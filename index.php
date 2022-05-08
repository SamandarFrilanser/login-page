<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="form">
        <div class="regis">
            <a href="#" class="sign-in">Sign in</a>
            <a href="#" class="sign-up">Sign up</a>
        </div>
        <form action="" method="GET">
            <input type="text" name="name" id="name" placeholder="Name..." 
            required=""><br>
            <?php
                if(isset($_GET["s1"])){
                    $pattern = "/^[a-z]{2,}+$/i";
                @$name = $_GET["name"];
                if(preg_match($pattern,$name)){
                    echo "<strong></strong>";
                }else{
                    echo "<strong>Bu {$name} ism xato!!</strong>";
                }
                }
            ?>
            <input type="email" name="email" id="email" placeholder="Email..." required=""><br>
            <?php
                if(isset($_GET["s1"])){
                    $pattern = "/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,}$/i";
                @$email = $_GET["email"];
                if(preg_match($pattern,$email)){
                    echo "<strong></strong>";
                }else{
                    echo "<strong>Bu {$email} elektron pochta xato!!</strong>";
                }
                }
            ?>
            <input type="tel" name="phone" id="tel" placeholder="+998..." required=""><br>
            <?php
                if(isset($_GET["s1"])){
                    $pattern = "/^[0-9]+$/i";
                @$phone = $_GET["phone"];
                if(preg_match($pattern,$phone)){
                    echo "<strong></strong>";
                }else{
                    echo "<strong>Bu {$phone} raqam xato!!!</strong>";
                }
                }
            ?>
            <div class="gender">
                <label>Male</label>
                <input type="radio" name="jins" id="">
                <label>Female</label>
                <input type="radio" name="jins" id="">
            </div>
            </textarea><br>
            <div class="sub_btn">
                    <input type="submit" class="calc" name="s1" value="Submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
            </div>

            <div class="social-networks">
                <div class="instagram">
                    <img src="img/instagram-2-1-logo-svgrepo-com.svg" alt="insta">
                </div>
                <div class="tik-tok">
                    <img src="img/tiktok-icon-white-1-logo-svgrepo-com.svg" alt="tiktok">
                </div>
                <div class="telegram">
                    <img src="img/telegram-logo-svgrepo-com.svg" alt="tg">
                </div>
                <div class="youtube">
                    <img src="img/youtube-svgrepo-com.svg" alt="youtube">
                </div>
            </div>
        </form>
    </div>

    
</body>
</html>