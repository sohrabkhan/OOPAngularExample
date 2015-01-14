<?php
/**
 * @author Sohrab Khan
 * @version 0.1
 */
header('Content-type: text/html; charset=utf-8');
include_once('bootstrap.php');

$display = new DisplayController();
$display->displayAction();