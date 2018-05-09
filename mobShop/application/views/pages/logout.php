<?php 
if (isset($_COOKIE['login'])) {
    unset($_COOKIE['login']);
    setcookie('login', '', time() - 3600, '/'); // empty value and old timestamp
}
$loc="location:".base_url().'admin_panel';header('Location:'. $loc);
?>