<?php
$host = "35.192.173.139";
$port = "5432";
$dbname = "registry_in";
$user = "postgres";
$password = "122433"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into public.users(last_name,first_name,username,email,pwd)values('".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['username']."','".$_POST['email']."', '".md5($_POST['pwd'])."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
           header('location:login_page.php');
            echo "Data saved Successfully"; 
    }else{
        
            echo "Something Went Wrong";
}}
?>

<!DOCTYPE html>
<html>
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
    <section class="subheader1"> 
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
            <div class="title1">
                    <h1>REGISTRATION OF<br>INHABITANTS AND MIGRANTS</h1>
            </div>
  <div class="sign">
                <form class="signup-form" action="" method="post">
                <h2>Create Account</h2>
                <div class="signup-form">
                    <label for="last_name"></label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter Lastname" name="last_name">
                </div>
                <div class="signup-form">
                    <label for="first_name"></label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter Firstname" name="first_name">
                </div>
                <div class="signup-form">
                    <label for="username"></label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="signup-form">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="signup-form">
                    <label for="pwd"></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    `           </div>
                <input type="submit" name="submit" class="button3" value="CREATE ACCOUNT">
                <p>ALREADY HAVE AN ACCOUNT?</p><a href="login_page.php" class="suh">LOGIN HERE</a>
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
