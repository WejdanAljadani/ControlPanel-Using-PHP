<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style file-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <!-- tilte for this page-->
    <title>Movement page</title>
</head>

<body>
    <div class="Container">

        <img id="logo" src="https://www.s-m.com.sa/images/logo.png" width="200px" height="100px" />
        <p style="color: white ;font-size:20pt ;text-align: center">
            <?php
            PostData()
            ?>
        </p>
        <br/>
        <br/>
        <br/>
        <div>
            <p style="color: white ;font-size:20pt ;text-align: center">Designed by Wejdan Aljadani</p>
        </div>

    </div>
</body>

</html>



<?php
function PostData()
{
    if (isset($_POST['left'])) {
        echo "L";
    } elseif (isset($_POST['right'])) {
        echo "R";
    } elseif (isset($_POST['forwards'])) {
        echo "F";
    } elseif (isset($_POST['backwards'])) {
        echo "B";
    } else {
        echo "S";
    }
}
?>