<?php
    require "./connect.php";

    //insert querry
    
    if(isset($_POST["shorten"])){

        $longurl = $_POST['longurl'];
        $shorturl = substr(uniqid(), 0, 5);

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

        $sql = "SELECT * FROM `urls` where shorturl like '$shorturl'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
                $url = $row["longurl"];
                echo '<a href="' . $url . '" target="blank">' . $url . '</a> <br>'; 
            } 
        }
        else {
            echo "No url Found";
        }

    }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center py-5">

        <div class="row align-items-start">
            <div class="col">
                <header class="text-center">
                    <h1 class="dipslay-6">URL Shortener</h1>
                </header>
                <form class="row g-3" action="/" method="post">
                    <div class="col-auto">
                        <label for="urlShorten" class="form-label">Enter a URL to shorten:</label>
                    </div>
                    <div class="mb-3 col-auto">
                        <input type="text" name="longurl" class="form-control" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="shorten" class="btn btn-primary">Create</button>
                    </div>
                </form>

                <form class="row g-3" action="/" method="post">
                    <div class="col-auto">
                        <label for="urlShorten" class="form-label">Enter the short url :</label>
                    </div>
                    <div class="mb-3 col-auto">
                        <input type="text" name="shorturl" class="form-control" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="search" class="btn btn-primary mb-3">Search</button>
                    </div>

                </form>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>