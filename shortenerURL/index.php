<?php
require "./db.php";

$sql = "SELECT * FROM `urls`";
$urls = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Kat</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>Link/Kat</h1>
    </header>

    <main>
        <section class="form">
            <form action="/add/index.php" method="post">
                <input type="text" name="long_url" id="long_url" placeholder="e.g. https://example.com" />
                <input type="submit" value="SHORTEN" />
            </form>
        </section>

        <section class="urls">
            <?php foreach ($urls as $url): ?>
                <div class="url">
                    <div class="id">
                        <?= $url['uid'] ?>
                    </div>
                    <div class="short_url">
                        <a href="http://localhost:8000/r?c=<?= $url['uid']; ?>" target="_blank">http://localhost:8000/r?c=
                            <?= $url['uid']; ?>
                        </a>
                    </div>
                    <div class="long_url">
                        <a href="<?= $url['longurl']; ?>" target="_blank">
                            <?= $url['longurl']; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>