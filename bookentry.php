<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> BOOK INFO ENTER </TITLE></HEAD>
<BODY>

<form  method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' id='bookentry'>
    <input type="text" placeholder="Book Name" name='bookname'>
    <input type="text" placeholder="Author Name" name='authorname'>
    <input type="text" placeholder="imagepath" name='imagepath'>
    <input type="text" placeholder="Summary" name='summary'>
    <input type="text" placeholder="Number of Pages" name='pages'>
    <input type="text" placeholder="Quantity" name='quantity'> 
    <input type="text" placeholder="Publisher Name" name='publishername'>
    <input type="text" placeholder="Publish Date" name='publishdate'>
    <input type="text" placeholder="Section" name='section'><br>
    <button type='submit' name='submit' form='bookentry'>Enter</button>
</form>
<?php

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = 'akshit2405';
$dbname = 'library';
$bookname=$authorname=$imagepath=$summary=$publishername=$publishdate=$section='';
$pages=$quantity=$formint=0;

$conn = new mysqli($servername, $dbusername, $dbpassword);
$sql = "create database if not exists library";
if ($conn->query($sql) == TRUE){
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
}
/*$sql = "CREATE TABLE IF NOT EXISTS books(
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    BOOKNAME VARCHAR(50) NOT NULL UNIQUE,
    AUTHORNAME VARCHAR(50),
    IMAGEPATH VARCHAR(50),
    SUMMARY LONGTEXT,
    PAGES INT,
    QUANTITY INT)";
$conn->query($sql);*/

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["bookname"])){
        $bookname = test_input($_POST["bookname"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["publishername"])){
        $publishername = test_input($_POST["publishername"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["publishdate"])){
        $publishdate = test_input($_POST["publishdate"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["section"])){
        $section = test_input($_POST["section"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["authorname"])){
        $authorname = test_input($_POST["authorname"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["imagepath"])){
        $imagepath = test_input($_POST["imagepath"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["summary"])){
        $summary = test_input($_POST["summary"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["pages"])){
        $pages = test_input($_POST["pages"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["quantity"])){
        $quantity = test_input($_POST["quantity"]);
        $formint=$formint+1;
    } else {$formint=-11;}
}

if ($formint==9){
    $sql = "INSERT INTO BOOKS (BOOKNAME, AUTHORNAME, IMAGEPATH, SUMMARY, PAGES, QUANTITY, PUBLISHERNAME, PUBLISHDATE, SECTION) VALUES ('".$bookname."', '".$authorname."', '".$imagepath."', '".$summary."',".$pages.",".$quantity.", '".$publishername."', '".$publishdate."', '".$section."')";
    $conn->query($sql);
} elseif ($formint<0){
    echo "Couldnt enter record. ";
} else {
    echo "Ready to enter records. ";
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
echo "The Table of records reads as: ";
while ($row = $result->fetch_assoc()){
    echo '<br>';
    foreach ($row as $x){
        echo $x." ";
    }
}

$conn->close();
?>