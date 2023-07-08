<!DOCTYPE html>
<html lang="en">

<head>
    <script src="external-js.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library PICT, Pune</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="books-section.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Belanosima&display=swap');
    </style>
</head>

<body>
<?php
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$search="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $search = test_input($_POST["search"]);
}

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = 'akshit2405';
$dbname = 'library';

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM BOOKS WHERE SUMMARY LIKE '%".$search."%'";
$result = $conn->query($sql);
?>

<div w3-include-html="header.html"></div>
<script>includeHTML();</script>
    <main>
        <div class="container">
            <div class="main-container">
                <div class="separate-div">
                    <div class="books-container">
                        <h4>Suggested topics within your search</h4>
                        <div class="related-search" style="padding:0px 7px"><br> 
                        <form id="l" method='post' action='books-section.php'><input type='hidden' name='search' value='object'></form>
                        <form id="m" method='post' action='books-section.php'><input type='hidden' name='search' value='blockchain'></form>
                        <a href="javascript:{}" onclick="document.getElementById('x').submit(); return false;">Artificial Intelligence </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('l').submit(); return false;">Objected Oriented Programming </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('m').submit(); return false;">Blockchain </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('u').submit(); return false;">Data Structures and Analysis </a>| 
                        <a href="javascript:{}" onclick="document.getElementById('z').submit(); return false;">Physics </a>
                        </div>

                        <div class="library-container">
                            <ol><?php $num=1;
                                while ($row = $result->fetch_assoc()){
                                echo '<div class="sr-no" style="border:0px">';
                                    echo '<p>'.$num.'</p>';
                                    echo '<li>';
                                        echo '<div class="book-img" style="border:0px"><img style="height:220px; width:150px" src="'.$row["IMAGEPATH"].'"></div>';
                                        echo '<div class="book-info" style="padding:0px 7px; border:0px"><pre></pre>'.$row["BOOKNAME"].', '.$row["SUMMARY"].'<br>By '.$row["AUTHORNAME"].'<br><br>Pages: '.$row["PAGES"];
                                        echo '<br><br>Publication: '.$row["PUBLISHERNAME"].', '.$row["PUBLISHDATE"].'<br><br>Section Available: '.$row["SECTION"].'</div>';
                                        echo '</li>';
                                echo '</div>'; $num++;
                                } ?>
                            </ol>
                        </div>
                    </div>


                    <div class="info-container">
                        <p>Results</p>
                    </div>
                </div>
            </div>
    </main>

<div w3-include-html="footer.html"></div>
<script>includeHTML();</script>

<script src="script.js"></script>

</body>

</html>