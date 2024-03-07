<?php

session_start();

$sessionValue = isset($_SESSION['isLogin'] ) ? $_SESSION['isLogin'] : false;
$isLogin = $sessionValue;

var_dump($isLogin);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
</head>
<body>

    <main>

    <?php if($isLogin){
        
    echo '  <form action="/logout.php" method="post" >
                <button>Logout</button>
            </form>';
        
    }else{
        echo '  <form action="/login.php" method="post" >
                    <button>Login</button>
                </form>';
    }
    
    ?>
        
    </main>
    
</body>
</html>