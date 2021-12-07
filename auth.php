<?php

date_default_timezone_set("Asia/Jakarta");
include('config.php');
session_start();

if (!isset($_SESSION["user"]) && $_SERVER['REQUEST_URI'] != "/index.php") header("Location: login.php");
