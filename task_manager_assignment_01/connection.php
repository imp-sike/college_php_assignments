<?php

$mysqli = new mysqli("localhost","root","","taska", "3307");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}