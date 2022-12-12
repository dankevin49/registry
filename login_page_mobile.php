<?php
$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "122433"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $hashpassword = md5($_POST['pwd']);
    $sql ="select *from public.users where email = '".pg_escape_string($_POST['email'])."' and pwd ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        header('location:dashboard.php'); 
    }else{
        
        echo "Invalid Details";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="keywords" content="Registry,Mobile_version">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Registry of Inhabitants and Migrants</title>
    <link rel="stylesheet" href="style_mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <section class="header"> 
            <nav>
                <a href="sign-in_page.html" class="Rep">REPUBLIC OF THE PHILIPPINES<br>CITY OF BORONGAN</a>
                <div class="title">
                    <h1>REGISTRATION OF<br>INHABITANTS AND MIGRANTS</h1>
                </div>
                <div class="log">
                <form class="login-form" action="" method="post">
                <h2>Login Here </h2>
                    <div class="login-form">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="login-form">
                    <label for="pwd"></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    `           </div>
                <input type="submit" name="submit" class="button3" value="Submit">
                <p>DON'T HAVE AN ACCOUNT?</p><a href="signup_page.php" class="suh">SIGN UP HERE</a>
                </form>
                </div>
            </nav>
                <div class="da">
                    <img src="images/da.png">
                </div>
            <div class="bor">
                <img src="images/Borongan_City_Seal-removebg-preview.png">
            </div>
            <div class="visit">
                <h2>VISIT US</h2>
                <p>City Hall<br>Victoria corner Cardona Street, Barangay E,<br>City of Borongan, Eastern Samar, Philippines</p>
            <div class="contact">
                <h3>CONTACT US</h3>
                <p>borangancityinfo@gmail.com</p>
                <a href="" class="linkcontact"><i class="fa fa-facebook"></i>   FACEBOOK</a>
            </div>
            <div class="government">
                <h3>GOVERNMENT LINKS</h3>
                <a href="" class="linkgovern">Republic of the Philippines</a><br>
                <a href="" class="linkgovern">DILG</a><br>
                <a href="" class="linkgovern">DTI</a>
            <div class="government2">
                <a href="" class="linkgovern2">PSA</a><br>
                <a href="" class="linkgovern2">City of Borongan</a><br>
                <a href="" class="linkgovern2">Tourism</a>
            </div>
            </div>
            <div class="seal">
                <img src="images/seal.png">
                <p>All content is in public domain<br>unless otherwise stated</p>
            </div>
</body>
</html>