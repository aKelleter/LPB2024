<?php
    require "app/session-start.php";

    // Détruire la session
    session_destroy();
    // Rediriger par la page index (login form)
    header("Location:index.php");