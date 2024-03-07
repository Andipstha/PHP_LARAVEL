<?php

session_start();

$_SESSION['isLogin'] = false;

header('Location: /');