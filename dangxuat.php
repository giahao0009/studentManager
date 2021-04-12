<?php
session_start();
if (isset($_session['username'])) {
    unset($_session['username']);
    header('location: dangnhap.php');
} else {
    header('location: dangnhap.php');
}
