<?php

if(isset($_POST['enviar'])){
    header('Location: telamenu.php');
} else {
    header('Location: login.php');
}