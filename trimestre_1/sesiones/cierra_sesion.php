<?php

    session_start();
    unset($_SESSION['agenda']);
    session_destroy();

?>