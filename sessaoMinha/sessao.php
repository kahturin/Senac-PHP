<?php

session_start();

if (!isset($_SESSION['login'])){
        header('Location: /TSI_SENAC_PHP_2020_2/sessao');
}

