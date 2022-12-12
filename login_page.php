<?php
$host = "35.192.173.139";
$port = "5432";
$dbname = "registry_in";
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
<head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Registry,Mobile_version">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry of Inhabitants and Migrants</title>
    <link rel="stylesheet" href="style_website.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header"> 
            <nav>
                <div class="republic">
                    <h1><span style="color:#A19417"> REPUBLIC OF THE PHILIPPINES</span><BR>
                        <span style="color:#38B524">CITY OF</span>
                        <span style="color:#FF2E71">BORONGAN</span>
                       <!-- <span style="color:#38B524">B</span>
                        <span style="color:#38B524">O</span>
                        <span style="color:#38B524">R</span>
                        <span style="color:#38B524">O</span>
                        <span style="color:#FF2E71">N</span>
                        <span style="color:#FF2E71">G</span>
                        <span style="color:#FF2E71">A</span>
                        <span style="color:#FF2E71">N</span>-->
                    </h1>
                </div>
                <div class="bor">
                <a href="login_page.php"><img src="images/Borongan_City_Seal-removebg-preview.png"></a>
                 </div>
            </nav>
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
                <input type="submit" name="submit" class="button3" value="LOGIN">
                <p>DON'T HAVE AN ACCOUNT?</p><a href="signup_page.php" class="suh">SIGN UP HERE</a>
                <a href="" class="button2"><i class="fa fa-google"></i> LOGIN USING GOOGLE</a>
                </form> 
                </div>
        <div class="footerlinks">
            <div class="da">
                <img src="images/da.png">
            </div>
            <div class="visit">
                <h2>VISIT US</h2>
                <p>City Hall<br>Victoria corner Cardona Street, Barangay E,<br>City of Borongan, Eastern Samar, Philippines</p>
            </div>
            <div class="contact">
                <h3>CONTACT US</h3>
                <p>borongancityinfo@gmail.com</p>
            </div>
            <div class="government">
                <h3>GOVERNMENT LINKS</h3>
                
            </div>
            <div class="seal">
                <img src="images/seal.png";
            </div>
            <div class="sealdscrpt">
                 <p>All content is in public domain<br>unless otherwise stated</p>
            </div>
        </div>
</body>
</html>