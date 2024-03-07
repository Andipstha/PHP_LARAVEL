<?php

session_start();

$_SESSION['isLogin'] = true;

header('Location: /');