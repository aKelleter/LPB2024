<?php

    // Lancement des sessions
    session_start();

    if(empty($_SESSION['IDENTIFY']))
        $_SESSION['IDENTIFY'] = 0;