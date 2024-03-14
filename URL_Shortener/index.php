<?php
    require "./connect.php";

    //insert querry
    
    if(isset($_POST["shorten"])){

        $longurl = $_POST['longurl'];
        $shorturl = substr(uniqid(), 0, 5);

        // echo md5($longurl);
        // $uid = md5($longurl);

        // $shorturl = substr($uid, 0, 5);
        // $shorturl = substr(md5(uniqid(rand(1,6))), 0, 8);
        // $shorturl = md5(uniqid($longurl), 0, 8);



        $sql = "INSERT INTO `urls` (longurl,shorturl) value ('$longurl', 'http://localhost:8080/$shorturl')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Successfully added: ";
            echo "http://localhost:8080/$shorturl";
        }else{
            echo "Failed to added url";

        }
    }
    if(isset($_POST["search"])){
        $shorturl = $_POST['shorturl'];

        // $sql = "SELECT `longurl` where shorturl = '$shorturl'";
        // $sql = "SELECT * FROM `urls` where shorturl = '$shorturl'";
        $sql = "SELECT * FROM `urls` where shorturl like '$shorturl'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
                // echo $row["longurl"];
                // $url = urlencode($row["longurl"]);
                $url = $row["longurl"];
                // echo '<a href="' . $row["longurl"] . '">' . $row["longurl"] . '</a> <br>'; 
                echo '<a href="' . $url . '" target="blank">' . $url . '</a> <br>'; 
            } 
        }
        else {
            echo "No url Found";
        }


        // echo "www.google.com";

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>

</head>
<body>

    <div class="container">

            <!-- <label for="longurl">http://google.de</label> <br> -->
            <!-- <label for="longurl">http://localhost/1</label> -->
        <form action="" method="post">
            <h1>Enter a URL to shorten:</h1>
            <input type="text" name="longurl">
            <button type="submit" name="shorten">Shorten the URL</button>
            <button>Cancel</button>

        </form>

        <form action="" method="post">
            <h1>Enter the short url :</h1>
            <input type="text" name="shorturl">
            <button type="submit" name="search">Search</button>
            <button>Cancel</button>

        </form>


    </div>
    
    
    
</body>
</html>