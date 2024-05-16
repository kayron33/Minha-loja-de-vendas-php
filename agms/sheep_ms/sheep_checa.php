<?php
ob_start();
session_cache_expire(60);

session_start();
require('../sheep_core/config.php');

$see_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$ms = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>