<!DOCTYPE html>
<html lang="en">

<head>
    <script src="external-js.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <title>Login and Sign Up</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .error {color: #FF0000;}
            @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap');
    
            @import url('https://fonts.googleapis.com/css2?family=Belanosima&display=swap');
        </style>
</head>

<body>
<header>
    <div class="nav-bar">
        <div class="main-logo">
            <div class="nav-logo border">
                <a id="click-logo" href="index.php">
                    <div class="logo"></div>
                </a>
            </div>
            <div class="logo-name">
                <a id="click-logo" href="index.php">
                    <p>Library PICT, Pune</p>
                </a>
            </div>
        </div>

        <div class="space">
            <div class="nav-about">
                <a href="aboutUs.php">About Us</a>
                <div class="underline"></div>
            </div>
            <div class="nav-E-resources">
                <a href="e-resources.php">E-Resources</a>
            </div>
            <div class="nav-library-service">
                <a href="services.php">Library Services</a>
            </div>
            <div class="select-menu">
                <div class="select-btn">
                    <div class="section-name">
                        <span class="sBtn-text">Books Section</span>
                    </div>

                    <div class="drop-down">
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>

                <ul class="options">
                    <li class="option">
                        <a href="books-section.php"><span class="option-text">Books Section</span></a>
                    </li>
                    <li class="option"><form id="y" method='post' action='books-section.php'><input type='hidden' name='search' value='math'>
                        <a href="javascript:{}" onclick="document.getElementById('y').submit(); return false;"><span class="option-text">Mathematics</span></a></form>
                    </li>
                    <li class="option"><form id="z" method='post' action='books-section.php'><input type='hidden' name='search' value='physics'>
                        <a href="javascript:{}" onclick="document.getElementById('z').submit(); return false;"><span class="option-text">Physics</span></a></form>
                    </li>
                    <li class="option"><form id="w" method='post' action='books-section.php'><input type='hidden' name='search' value='chemistry'>
                        <a href="javascript:{}" onclick="document.getElementById('w').submit(); return false;"><span class="option-text">Chemistry</span></a></form>
                    </li>
                    <li class="option"><form id="x" method='post' action='books-section.php'><input type='hidden' name='search' value='artificial intelligence'>
                        <a href="javascript:{}" onclick="document.getElementById('x').submit(); return false;"><span class="option-text">Artificial Intelligence</span></a></form>
                    </li>
                    <li class="option"><form id="v" method='post' action='books-section.php'><input type='hidden' name='search' value='fundamentals'>
                        <a href="javascript:{}" onclick="document.getElementById('v').submit(); return false;"><span class="option-text">CS Fundamentals</span></a></form>
                    </li>
                    <li class="option"><form id="u" method='post' action='books-section.php'><input type='hidden' name='search' value='data structures'>
                        <a href="javascript:{}" onclick="document.getElementById('u').submit(); return false;"><span class="option-text">Data Structures & Algorithm</span></a></form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="info">
            <div class="logIn">
                <a href="login.php">Log In</a>
            </div>
            <div class="signUp border">
                <a href="signUp.php">Sign Up</a>
            </div>
        </div>

        <!-- </div> -->

    </div>
    <div class="panel">
    <div class="search-select">
        <form method='post' action='books-section.php' id='searchbar' class="formexample" style="margin-bottom: 27px;border-radius:5px;display:flex;height:10px;width:400px">
        <input placeholder="  Search Books" name="search" type="text" style="height:120%;border-top-left-radius: 5px ;border-bottom-left-radius: 5px;border-top-right-radius: 0px ;border-bottom-right-radius: 0px;width=70px">
        <button type='submit' name='submit' form='searchbar' style="height:39px;margin-bottom:500px;border-top-right-radius: 5px ;border-bottom-right-radius: 5px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;width=200px"><i class="fa fa-search"></i></button>
        
        </form>

        </div>
</header>
<!-- Header Ends -->
<?php
$username=$password='';
$usernameErr=$passwordErr='';
$formint=$temp=0;

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["username"])){
        $usernameErr="*username is required";
    } else {
        $username = test_input($_POST["username"]);
        $formint = $formint + 1;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["password"])){
        $passwordErr="*password is required";
    } else {
        $password = test_input($_POST["password"]);
        $formint = $formint + 1;
    }
}

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = 'akshit2405';
$dbname = 'library';

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);


if ($formint == 2){
    $sql = "SELECT USERNAME FROM credentials";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        foreach ($row as $x){
            if ($username == $x){
                $sql = "SELECT PASSWORD FROM credentials WHERE USERNAME='".$x."'";
                $result2 = $conn->query($sql);
                $temp=1;
                while ($row2 = $result2->fetch_assoc()){
                    foreach ($row2 as $x2){
                        if ($password == $x2){
                            echo '<script>window.open("index.php","_self")</script>';
                        } else {
                            $usernameErr="";
                            $passwordErr = "*username and password does not match";
                        }
                    }
                }
            }
        }
        if ($temp != 1){
            $usernameErr="*username does not exist";
        }
    }
}

?>

    <div class="wrapper">
        <h1>Login</h1>
        <form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' id='loginform'>
            <input type="text" placeholder="Username" name="username"> <br> <span class='error'> <?php echo $usernameErr;?></span>
            <input type="password" placeholder="Password" name="password"> <br> <span class='error'> <?php echo $passwordErr;?></span>
            <div class="recover">
                <a href="#">Forgot Password?</a>
            </div>
        <button type='submit' name='submit' form='loginform'>Login</button>
        </form>
        <div class="member">
            Not a member? <a href="signup.php">Register Now
            </a>
        </div>
    </div>

<div w3-include-html="footer.html"></div>
<script>includeHTML();</script>

<script src="script.js"></script>

</body>

</html>