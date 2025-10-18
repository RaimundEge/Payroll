<?php
session_start();
if (isset($_GET['true'])) {
    $_SESSION['debug'] = true;
} else {
    unset($_SESSION['debug']);
}