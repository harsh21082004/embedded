<?php
//Include the database connection code here
include("database_connection.php");

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  //Retrieve user data from database
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0){
    //User exists, redirect to profile.php
    header("Location: profile.php");
    exit();
  }else{
    echo "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script
   src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

<link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<nav class="kite-menu">
        <div class="logo">
            <img src="https://www.logodesign.net/images/home-industry/technology-logo-02.jpg" id="image"
                alt="Technology">
        </div>
        <div class="kite-menu-trigger" id="hamburger"><span></span></div>
        <div class="kite-search-trigger">
           <i class="fa fa-search"></i>
        </div>
        <div class="kite-search">
           <form action="#">
              <input type="text" autocomplete="off" name="search" />
              <button type="submit" class="search-btn"> <i class="fa fa-search"></i> </button>
           </form>
        </div>
        <div class="links-wrapper">
           <ul class="menu-links">
              <li> <a href="index.html">Home </a> </li>
              <li> <a href="index.html">About Us</a> </li>
              <li> <a href="index.html"> Our Services</a> </li>
              <li> <a href="contactus.html">Contact </a> </li>
           </ul>
        </div>
     </nav>
     <div class="login">
  <h2>Login</h2>
  <form method="post" action="login.php" id="contact">
    <label>Username:</label>
    <input type="text" name="username" class="inp"><br><br>
    <label>Password:</label>
    <input type="password" name="password" class="inp"><br><br>
    <input type="submit" name="submit" value="Login" id="but">
  </form>
  </div>
  <div class="new">
        <div class="desk">
            <h2>Helpdesk</h2>
            <li class="co"><a href="contactus.html">Contact Us</a></li>
        </div>
        <div class="desk">
            <h2>Additional Links</h2>
            <li class="co"><a href="index.html">Home</a></li>
            <li class="co"><a href="index.html">About Us</a></li>
        </div>
        <div class="desk">
            <h2>Important Links</h2>
            <li class="co"><a href="https://linkedin.com" target="_blank">LinkedIn</a></li>
            <li class="co"><a href="https://google.com" target="_blank">Google</a></li>
            <li class="co"><a href="https://facebook.com" target="_blank">Facebook</a></li>
            <li class="co"><a href="https://twitter.com" target="_blank">Twitter</a></li>
        </div>
    </div>
    <div class="imp">
        <ul class="impo">
            <li class="co"><a href="copyright.html">Copyright Policy </a></li>
            <span> / </span>
            <li class="co"><a href="privacy.html">Privacy Policy </a></li>
            <span> / </span>
            <li class="co"><a href="hyperlink.html">Hyperlink Policy </a></li>
            <span> / </span>
            <li class="co"><a href="terms.html">Terms And Conditions </a></li>
            <span> / </span>
            <li class="co"><a href="contactus.html">Help </a></li>
        </ul>
    </div>
    <div class="footer">
        <div class="copy">
            <div class="copyRightsText">
                <p class="mr-none">Content Owned and Maintained by Embedded Technology
                </p>
                <p class="mr-bottom10">Designed, Developed and hosted by <a href="https:/github.com"
                        target="_blank">Github</a>
                </p>
            </div>
            <div class="copyRightsLogos">
                <a href="https://faceook.com"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Facebook_New_Logo_%282015%29.svg/1280px-Facebook_New_Logo_%282015%29.svg.png" class="swaas"
                    alt="Secure, Scalable and Sugamya Website as a Service"></a>
            <a href="https://twitter.com"><img
                    src="https://logos-world.net/wp-content/uploads/2020/05/Twitter-Logo-2010.png" class="nic"
                    alt="National Informatics Centre"></a>
            <a href="https://linkedin.com"></a>
            <a href="https://linkedin.com"><img
                    src="https://1000logos.net/wp-content/uploads/2023/01/LinkedIn-logo.png"
                    class="digi" alt="Digital India"></a>
            </div>
        </div>
    </div>
    <style>
        #contact {
    color: rgb(255, 255, 255);
    background-image: url(https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Ymx1ZSUyMGdyYWRpZW50fGVufDB8fDB8fA%3D%3D&w=1000&q=80);
    margin: 50px auto;
    padding: 20px 15px;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-items: left;
    margin-bottom: 30px;
    border-radius: 7px;
    box-shadow: 0px 0px 20px rgba(80, 80, 83, 0.952);
}
.login{
    margin:50px;
}
.login h2{
    margin:auto;
    margin-top:50px;
    width:30%;
    color:white;
    background-color:gray;
    border-radius:10px;
    border:none;
    box-shadow:0 0 10px black;
    text-align:center;
}

.inp {
    max-width: 800px;
    max-height: 20px;
    padding: 6px;
    border-radius: 3px;
    flex-direction: column;
    box-shadow: 0 0 10px rgba(98, 98, 105, 0.904);
    border: none;
    margin-bottom: 10px;
    background-color: rgb(211, 233, 252);
}

label {
    font-weight: bold;
}

.inpu {
    max-width: 800px;
    max-height: 80px;
    padding: 6px;
    border-radius: 3px;
    flex-direction: column;
    box-shadow: 0 0 10px rgba(98, 98, 105, 0.904);
    border: none;
    margin-bottom: 10px;
    background-color: rgb(211, 233, 252);
}

#but {
    max-width: 60px;
    height: 30px;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(98, 98, 105, 0.904);
    border: none;
    margin-bottom: 10px;
    background-color: rgb(31, 219, 125);
}
        body {
    background: url(https://wallpaperaccess.com/full/1657858.jpg);
    background-size: cover;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.inp {
    max-width: 800px;
    max-height: 20px;
    padding: 6px;
    border-radius: 3px;
    flex-direction: column;
    box-shadow: 0 0 10px rgba(98, 98, 105, 0.904);
    border: none;
    margin-bottom: 10px;
    background-color: rgb(211, 233, 252);
}

label {
    font-weight: bold;
}

.inpu {
    max-width: 800px;
    max-height: 80px;
    padding: 6px;
    border-radius: 3px;
    flex-direction: column;
    box-shadow: 0 0 10px rgba(98, 98, 105, 0.904);
    border: none;
    margin-bottom: 10px;
    background-color: rgb(211, 233, 252);
}

#but {
    max-width: 60px;
    height: 30px;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(98, 98, 105, 0.904);
    border: none;
    margin-bottom: 10px;
    background-color: rgb(31, 219, 125);
}
.desk{
    margin: 2px auto;
    padding: 2px 40px;
}
.new{
    background-color: #052963;
    max-width: 100%;
    display: flex;
}
.desk a{
    padding: 5px;
    text-decoration: none;
    color: white; 
    font-size: 1rem;
    margin-top: 5px;
}
.desk li{
    list-style: none;
    
}
.desk h2{
    padding: 2px;
    font-size: 1.3rem;
    color: white; 
}
.desk a:hover{
    cursor: pointer;
    text-decoration: underline;
    border-radius: 15px;
    background-color: rgb(172, 19, 19);
}
.imp{
    background-color: gray;
    display: flex;
    align-items: center;
    
    max-width: 100%;
}
.imp ul{
    display: flex;  
    margin: auto;
}
.imp ul li a{
        text-decoration: none;
        color: white;
        display: flex;
        border-radius: 20px;
        
}
.imp ul li{
    padding: 10px;
    list-style: none;
}
.imp ul span{
    color: white;
    padding: 10px;
}
.copyRightsText{
    color: #ffffff;
    text-align: center;
    max-width: 50%;
    margin: auto;
    display: flex;
    flex-direction: column;
}
.copyRightsText a{
    color: #2277ff;
}
.swaas{
    box-shadow: 0px 0px 5px rgb(255, 255, 255);
    border: none;
    width: 160px;
    padding: 3px 7px;
    height: 60px;
}
.nic{
    box-shadow: 0px 0px 5px rgb(255, 255, 255);
    border: none;
    width: 160px;
    padding: 3px 7px;

    height: 60px;
}
.digi{
    box-shadow: 0px 0px 5px rgb(255, 255, 255);
    border: none;
    width: 160px;
    padding: 3px 7px;
    height: 60px;
}
.copyRightsLogos{
    justify-content: center;
    max-width: 50%;
    margin: 30px auto;
    display: flex;
    
}
.footer{
    background-color: #161616;
    margin: 0;
    padding: 5px;
}
@media only screen and (max-width:790px){
    .logo{
        position: absolute;
        left:2px;
    }
    .new .desk{
        margin: 0px 20px;
        padding: 10px 0px;


    }
    .new{
        display: flex;
        flex-direction: column;
    }
    .imp .impo{
        margin: 0px 20px;
        padding: 0px 0px;
        display: flex;
        flex-direction: column;
    }
    .copyRightsLogos{
        text-align: center;
        max-width: 50%;
        margin: 30px auto;
        display: flex;
        flex-direction: column;
        
    }
}
    </style>
    <script src="cont.js"></script>

<script>
$(document).ready(function(){
$(".kite-menu").kiteMenu();
});
</script>
</body>
</html>

